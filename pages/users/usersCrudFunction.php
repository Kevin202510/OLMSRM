<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    $attributes = ["users.id","users.user_role_id","user_profile","isMale","roles.role_display_name","users.user_fname","users.user_mname","users.user_lname","users.user_address","users.user_contact","users.user_DOB","users.user_email","users.user_username","users.user_password","users.created_at"];
    if(isset($_GET['getData'])){
        $DBCRUDAPI->selectleftjoin100("users","roles","id","user_role_id",$attributes,"where user_role_id != 1");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){

            if(isset($_FILES['file']['name'])){

                /* Getting file name */
                $filename = $_FILES['file']['name'];

                /* Location */
                $location = "../../assets/img/profiles/".$filename;
                $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                $imageFileType = strtolower($imageFileType);

                /* Valid extensions */
                $valid_extensions = array("jpg","jpeg","png");

                $response = 0;
                /* Check file extension */
                if(in_array(strtolower($imageFileType), $valid_extensions)) {
                    /* Upload file */
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
                        $response = $location;
                    }
                }
            }
            
            $user_profile = $_FILES['file']['name'];
            $user_role_id = $_POST["user_role_id"];
            $user_fname = $_POST["user_fname"];
            $user_mname = $_POST["user_mname"];
            $user_lname = $_POST["user_lname"];
            $user_address = $_POST["user_address"];
            $user_contact = $_POST["user_contact"];
            $user_DOB = $_POST["user_DOB"];
            $user_email = $_POST["user_email"];
            $user_username = $_POST["user_username"];
            $user_password = md5($_POST["user_password"]);
            

            $DBCRUDAPI->insert('users',['user_profile'=>$user_profile,'user_role_id'=>$user_role_id,'user_fname'=>$user_fname,'user_mname'=>$user_mname,'user_lname'=>$user_lname,'user_address'=>$user_address,'user_contact'=>$user_contact,'user_DOB'=>$user_DOB,'user_email'=>$user_email,'user_username'=>$user_username,'user_password'=>$user_password,]);

             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
            
        }else if(isset($_POST['update'])){

             $file_to_delete = "../../assets/img/profiles/".$_POST['logo']."";
            unlink($file_to_delete);

            if(isset($_FILES['file']['name'])){

                /* Getting file name */
                $filename = $_FILES['file']['name'];

                /* Location */
                $location = "../../assets/img/profiles/".$filename;
                $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
                $imageFileType = strtolower($imageFileType);

                /* Valid extensions */
                $valid_extensions = array("jpg","jpeg","png");

                $response = 0;
                /* Check file extension */
                if(in_array(strtolower($imageFileType), $valid_extensions)) {
                    /* Upload file */
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
                        $response = $location;
                    }
                }
            }
            
            $id = $_POST["id"];
            $user_profile = $_FILES['file']['name'];
            $user_role_id = $_POST["user_role_id"];
            $user_fname = $_POST["user_fname"];
            $user_mname = $_POST["user_mname"];
            $user_lname = $_POST["user_lname"];
            $user_address = $_POST["user_address"];
            $user_contact = $_POST["user_contact"];
            $user_DOB = $_POST["user_DOB"];
            $user_email = $_POST["user_email"];
            $user_username = $_POST["user_username"];
            $user_password = md5($_POST["user_password"]);

            $DBCRUDAPI->update('users',['user_profile'=>$user_profile,'user_role_id'=>$user_role_id,'user_fname'=>$user_fname,'user_mname'=>$user_mname,'user_lname'=>$user_lname,'user_address'=>$user_address,'user_contact'=>$user_contact,'user_DOB'=>$user_DOB,'user_email'=>$user_email,'user_username'=>$user_username,'user_password'=>$user_password,],"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('users',"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }

        }
    }


?>
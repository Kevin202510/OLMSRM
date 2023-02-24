<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->selectleftjoin("users","roles","role_id","user_role_id");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $user_role_id = $_POST["user_role_id"];
            $user_fname = $_POST["user_fname"];
            $user_mname = $_POST["user_mname"];
            $user_lname = $_POST["user_lname"];
            $user_address = $_POST["user_address"];
            $user_contact = $_POST["user_contact"];
            $user_DOB = $_POST["user_DOB"];
            $user_email = $_POST["user_email"];
            $user_username = $_POST["user_username"];
            $user_password = $_POST["user_password"];

            $DBCRUDAPI->insert('users',['user_role_id'=>$user_role_id,'user_fname'=>$user_fname,'user_mname'=>$user_mname,'user_lname'=>$user_lname,'user_address'=>$user_address,'user_contact'=>$user_contact,'user_DOB'=>$user_DOB,'user_email'=>$user_email,'user_username'=>$user_username,'user_password'=>$user_password,]);

            echo json_encode("success");
            
        }else if(isset($_POST['update'])){
            
            $user_id = $_POST["user_id"];
            $user_role_id = $_POST["user_role_id"];
            $user_fname = $_POST["user_fname"];
            $user_mname = $_POST["user_mname"];
            $user_lname = $_POST["user_lname"];
            $user_address = $_POST["user_address"];
            $user_contact = $_POST["user_contact"];
            $user_DOB = $_POST["user_DOB"];
            $user_email = $_POST["user_email"];
            $user_username = $_POST["user_username"];
            $user_password = $_POST["user_password"];

            $DBCRUDAPI->update('users',['user_role_id'=>$user_role_id,'user_fname'=>$user_fname,'user_mname'=>$user_mname,'user_lname'=>$user_lname,'user_address'=>$user_address,'user_contact'=>$user_contact,'user_DOB'=>$user_DOB,'user_email'=>$user_email,'user_username'=>$user_username,'user_password'=>$user_password,],"user_id='$user_id'");
        }else if(isset($_POST['delete'])){
            
            $user_id = $_POST["user_id"];

            $DBCRUDAPI->delete('users',"user_id='$user_id'");

        }else{
            $dataid = "user_id=" . $_POST['user_id'];
            $DBCRUDAPI->select("users","*",$dataid);
            $getData = $DBCRUDAPI->sql;
            $res = array();
            while($datass = mysqli_fetch_assoc($getData)){
                $res = $datass;
            }
            echo json_encode($res);
        }
    }


?>
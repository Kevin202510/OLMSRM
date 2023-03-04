<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("brands","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $brand_logo = $_FILES['file']['name'];
            $brand_display_name = $_POST["brand_display_name"];

            if(isset($_FILES['file']['name'])){

                /* Getting file name */
                $filename = $_FILES['file']['name'];

                /* Location */
                $location = "../../assets/img/brandlogos/".$filename;
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

            $DBCRUDAPI->insert('brands',['brand_display_name'=>$brand_display_name,'brand_logo'=>$brand_logo]);

             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
            
        }else if(isset($_POST['update'])){
            $file_to_delete = "../../assets/img/brandlogos/".$_POST['logo']."";
            unlink($file_to_delete);

            if(isset($_FILES['file']['name'])){

                /* Getting file name */
                $filename = $_FILES['file']['name'];

                /* Location */
                $location = "../../assets/img/brandlogos/".$filename;
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
            $brand_logo = $_FILES['file']['name'];
            $brand_display_name = $_POST["brand_display_name"];

            $DBCRUDAPI->update('brands',['brand_display_name'=>$brand_display_name,'brand_logo'=>$brand_logo],"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('brands',"id='$id'");

            if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }

        }
    }


?>
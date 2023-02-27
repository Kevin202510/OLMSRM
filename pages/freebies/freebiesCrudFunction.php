<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("freebies","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $fb_package_name = $_POST["fb_package_name"];
            $fb_description = $_POST["fb_description"];

            $DBCRUDAPI->insert('freebies',['fb_description'=>$fb_description,'fb_package_name'=>$fb_package_name]);

            echo json_encode("success");
            
        }else if(isset($_POST['update'])){
            
            $fb_id = $_POST["fb_id"];
            $fb_package_name = $_POST["fb_package_name"];
            $fb_description = $_POST["fb_description"];

            $DBCRUDAPI->update('freebies',['fb_description'=>$fb_description,'fb_package_name'=>$fb_package_name],"fb_id='$fb_id'");
        }else if(isset($_POST['delete'])){
            
            $fb_id = $_POST["fb_id"];

            $DBCRUDAPI->delete('freebies',"fb_id='$fb_id'");

        }else{
            $dataid = "fb_id=" . $_POST['fb_id'];
            $DBCRUDAPI->select("freebies","*",$dataid);
            $getData = $DBCRUDAPI->sql;
            $res = array();
            while($datass = mysqli_fetch_assoc($getData)){
                $res = $datass;
            }
            echo json_encode($res);
        }
    }


?>
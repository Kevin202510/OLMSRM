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
            $brand_logo = $_POST["brand_logo"];
            $brand_display_name = $_POST["brand_display_name"];

            $DBCRUDAPI->insert('brands',['brand_display_name'=>$brand_display_name,'brand_logo'=>$brand_logo]);

            echo json_encode(array("success"=>true));
            
        }else if(isset($_POST['update'])){
            
            $id = $_POST["id"];
            $brand_logo = $_POST["brand_logo"];
            $brand_display_name = $_POST["brand_display_name"];

            $DBCRUDAPI->update('brands',['brand_display_name'=>$brand_display_name,'brand_logo'=>$brand_logo],"id='$id'");
            echo json_encode(array("success"=>true));
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('brands',"id='$id'");

            if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }

        }
    }


?>
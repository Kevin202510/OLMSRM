<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("roles","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $role_display_name = $_POST["role_display_name"];

            $DBCRUDAPI->insert('roles',['role_display_name'=>$role_display_name]);

            echo json_encode("success");
            
        }else if(isset($_POST['update'])){
            
            $role_id = $_POST["role_id"];
            $role_display_name = $_POST["role_display_name"];

            $DBCRUDAPI->update('roles',['role_display_name'=>$role_display_name],"role_id='$role_id'");
        }else if(isset($_POST['delete'])){
            
            $role_id = $_POST["role_id"];

            $DBCRUDAPI->delete('roles',"role_id='$role_id'");

        }else{
            $dataid = "role_id=" . $_POST['role_id'];
            $DBCRUDAPI->select("roles","*",$dataid);
            $getData = $DBCRUDAPI->sql;
            $res = array();
            while($datass = mysqli_fetch_assoc($getData)){
                $res = $datass;
            }
            echo json_encode($res);
        }
    }


?>
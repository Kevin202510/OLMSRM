<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    $location = 'location: ../rolesTable.php';

    if(isset($_POST['addNew'])){
        $role_display_name = $_POST["role_display_name"];

        $DBCRUDAPI->insert('roles',['role_display_name'=>$role_display_name,]);

        if($DBCRUDAPI){
            header('location: ../rolesTable.php');
        }else{
            echo '<script>alert("May Error!");</script>';
        }
    }else if(isset($_POST['update'])){
        $role_id = $_POST['role_id'];
        $role_display_name = $_POST["role_display_name"];

        $DBCRUDAPI->update('roles',[
        'role_display_name'=>$role_display_name,],"role_id='$role_id'");

        if($DBCRUDAPI){
            header('location: ../rolesTable.php');
        }else{
            echo '<script>alert("May Error!");</script>';
        }
    }else if(isset($_POST['delete'])){
        
        $id = $_POST['id'];

        $DBCRUDAPI->delete('services',"service_id='$id'");

        if($DBCRUDAPI){
            header('location: ../../admin/serviceManagement.php');
        }else{
            echo '<script>alert("May Error!");</script>';
        }
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


?>
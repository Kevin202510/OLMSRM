<?php

    session_start();
    include_once('../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_POST['loginUser']) ){

        $user_email = $_POST['user_email'];
        $user_password  = md5($_POST['user_password']);

        $whereClause = "user_email='".$user_email."'AND user_password='".$user_password."'";
        $DBCRUDAPI->select("users","*",$whereClause);
         $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $_SESSION['userFullname'] = strtoupper($datass['user_fname']." ".$datass['user_mname']." ".$datass['user_lname']);
            $_SESSION['userRoleId'] = $datass['user_role_id'];
            $res[] = $datass;
        }
        echo json_encode($res);
    }else if(isset($_POST['logoutUser'])){
        session_destroy();
    }

?>
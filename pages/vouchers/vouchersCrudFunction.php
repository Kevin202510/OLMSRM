<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("vouchers","*","id!=0");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $voucher_code = $_POST["voucher_code"];
            $voucher_description = $_POST["voucher_description"];
            $voucher_discount = $_POST["voucher_discount"];
            $voucher_isActive = $_POST["voucher_isActive"];

            $DBCRUDAPI->insert('vouchers',['voucher_code'=>$voucher_code,'voucher_description'=>$voucher_description,'voucher_description'=>$voucher_description ,'voucher_discount'=>$voucher_discount,'voucher_isActive'=>$voucher_isActive]);

             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
            
        }else if(isset($_POST['update'])){
            
            $id = $_POST["id"];
            $voucher_code = $_POST["voucher_code"];
            $voucher_description = $_POST["voucher_description"];
            $voucher_discount = $_POST["voucher_discount"];
            $voucher_isActive = $_POST["voucher_isActive"];

            $DBCRUDAPI->update('vouchers',['voucher_code'=>$voucher_code,'voucher_description'=>$voucher_description,'voucher_description'=>$voucher_description ,'voucher_discount'=>$voucher_discount,'voucher_isActive'=>$voucher_isActive],"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('vouchers',"id='$id'");

            if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }

        }
    }


?>
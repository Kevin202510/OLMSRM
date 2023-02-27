<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("suppliers","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $supplier_name = $_POST["supplier_name"];
            $supplier_company_name = $_POST["supplier_company_name"];
            $supplier_contact = $_POST["supplier_contact"];
            $supplier_address = $_POST["supplier_address"];

            $DBCRUDAPI->insert('suppliers',['supplier_name'=>$supplier_name,'supplier_company_name'=>$supplier_company_name,'supplier_contact'=>$supplier_contact,'supplier_address'=>$supplier_address]);

            echo json_encode(array("success"=>true));
            
        }else if(isset($_POST['update'])){
            
            $id = $_POST["id"];
            $supplier_name = $_POST["supplier_name"];
            $supplier_company_name = $_POST["supplier_company_name"];
            $supplier_contact = $_POST["supplier_contact"];
            $supplier_address = $_POST["supplier_address"];

            $DBCRUDAPI->update('suppliers',['supplier_name'=>$supplier_name,'supplier_company_name'=>$supplier_company_name,'supplier_contact'=>$supplier_contact,'supplier_address'=>$supplier_address],"id='$id'");
            echo json_encode(array("success"=>true));
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('suppliers',"id='$id'");

            if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }

        }
    }


?>
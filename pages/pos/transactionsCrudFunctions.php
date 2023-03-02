<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    // $attributes = ["invoice_id","products.id","quantity","invoice.invoice_number","invoice.product_id","products.product_code","products.product_description","products.product_size","products.product_purchaseprice","products.product_wholesale","products.product_saleprice","products.product_stocksavail","products.product_image"];
    
    if(isset($_GET['getData'])){
        $whereClause = "invoice_number='".$_GET["invoice_number"]."'";
        $DBCRUDAPI->selectleftjoin1("invoice","products","id","product_id",$attributes,$whereClause);
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }else if(isset($_GET['allProducts'])){
        $whereClause = "product_code='".$_GET['product_code']."'";
        $DBCRUDAPI->select("products","*",$whereClause);
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
            echo json_encode($res);
    }else{
        if(isset($_POST['addNew'])){
            $transaction_voucher_id  = $_POST["transaction_voucher_id"];
            $transaction_invoice_number  = $_POST["transaction_invoice_number"];
            $transaction_cfullName = $_POST["transaction_cfullName"];
            $transaction_caddress = $_POST["transaction_caddress"];
            $transaction_totalAmount = $_POST["transaction_totalAmount"];
            $transaction_payment = $_POST["transaction_payment"];
            $transaction_change = $_POST["transaction_change"];

            $DBCRUDAPI->insert('transactions',['transaction_voucher_id'=>$transaction_voucher_id,'transaction_invoice_number'=>$transaction_invoice_number,'transaction_cfullName'=>$transaction_cfullName,'transaction_caddress'=>$transaction_caddress,'transaction_totalAmount'=>$transaction_totalAmount,'transaction_payment'=>$transaction_payment,'transaction_change'=>$transaction_change]);

            echo json_encode(array("success"=>true));
            
        }else if(isset($_POST['update'])){
            $invoice_number = $_POST["invoice_number"];
            $product_id = $_POST["product_id"];
            $quantity = $_POST["quantity"];
            $totalAmount = $_POST["totalAmount"];

            $que = "product_id=".$product_id." AND invoice_number='".$invoice_number."'";
            $DBCRUDAPI->update('invoice',['quantity'=>$quantity,'totalAmount'=>$totalAmount],$que);
            echo json_encode(array("success"=>true));
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('invoice',"invoice_id='$id'");
            echo json_encode(array("success"=>true));
        }
    }


?>
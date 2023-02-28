<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    // $attributes = ["products.id","products.product_brand_id","brands.brand_display_name","products.product_supplier_id","suppliers.supplier_company_name","products.product_code","products.product_description","products.product_size","products.product_purchaseprice","products.product_wholesale","products.product_saleprice","products.product_stocksavail","products.product_image","products.created_at"];
    
    if(isset($_GET['getData'])){
        $whereClause = "invoice_number='".$_GET["invoice_number"]."'";
        $DBCRUDAPI->selectleftjoin("invoice","products","id","product_id",$whereClause);
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }else if($_GET['allProducts']){
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
            $invoice_number = $_POST["invoice_number"];
            $product_id = $_POST["product_id"];
            $quantity = $_POST["quantity"];
            $totalAmount = $_POST["totalAmount"];

            $DBCRUDAPI->insert('invoice',['quantity'=>$quantity,'totalAmount'=>$totalAmount,'product_id'=>$product_id,'invoice_number'=>$invoice_number]);

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

            $DBCRUDAPI->delete('products',"id='$id'");
            echo json_encode(array("success"=>true));
        }
    }


?>
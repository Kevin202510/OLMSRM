<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("products","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $product_brand_id = $_POST["product_brand_id"];
            $product_supplier_id = $_POST["product_supplier_id"];
            $product_code = $_POST["product_code"];
            $product_description = $_POST["product_description"];
            $product_size = $_POST["product_size"];
            $product_purchaseprice = $_POST["product_purchaseprice"];
            $product_wholesale = $_POST["product_wholesale"];
            $product_saleprice = $_POST["product_saleprice"];
            $product_stocksavail = $_POST["product_stocksavail"];
            $product_image = $_POST["product_image"];

            $DBCRUDAPI->insert('products',['product_brand_id'=>$product_brand_id, 'product_supplier_id'=>$product_supplier_id ,'product_code'=>$product_code, 'product_description'=>$product_description, 'product_size'=>$product_size, 'product_purchaseprice'=>$product_purchaseprice, 'product_wholesale'=>$product_wholesale, 'product_saleprice'=>$product_saleprice, 'product_stocksavail'=>$product_stocksavail, 'product_image'=>$product_image]);

            echo json_encode(array("success"=>true));
            
        }else if(isset($_POST['update'])){
            $id = $_POST["id"];
            $product_brand_id = $_POST["product_brand_id"];
            $product_supplier_id = $_POST["product_supplier_id"];
            $product_code = $_POST["product_code"];
            $product_description = $_POST["product_description"];
            $product_size = $_POST["product_size"];
            $product_purchaseprice = $_POST["product_purchaseprice"];
            $product_wholesale = $_POST["product_wholesale"];
            $product_saleprice = $_POST["product_saleprice"];
            $product_stocksavail = $_POST["product_stocksavail"];
            $product_image = $_POST["product_image"];

            $DBCRUDAPI->update('products',['product_brand_id'=>$product_brand_id, 'product_supplier_id'=>$product_supplier_id ,'product_code'=>$product_code, 'product_description'=>$product_description, 'product_size'=>$product_size, 'product_purchaseprice'=>$product_purchaseprice, 'product_wholesale'=>$product_wholesale, 'product_saleprice'=>$product_saleprice, 'product_stocksavail'=>$product_stocksavail, 'product_image'=>$product_image],"id='$id'");
            echo json_encode(array("success"=>true));
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('products',"id='$id'");
            echo json_encode(array("success"=>true));
        }
    }


?>
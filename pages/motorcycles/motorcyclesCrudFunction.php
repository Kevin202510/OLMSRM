<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("motorcycles","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $mc_mvfile = $_POST["mc_mvfile"];
            $mc_platenumber = $_POST["mc_platenumber"];
            $mc_enginenumber = $_POST["mc_enginenumber"];
            $mc_chassisnumber = $_POST["mc_chassisnumber"];
            $mc_desposition = $_POST["mc_desposition"];
            $mc_pistondisplacement = $_POST["mc_pistondisplacement"];
            $mc_numberofcylinders = $_POST["mc_numberofcylinders"];
            $mc_fuel = $_POST["mc_fuel"];
            $mc_make = $_POST["mc_make"];
            $mc_series = $_POST["mc_series"];
            $mc_bodytype = $_POST["mc_bodytype"];
            $mc_bodynumber = $_POST["mc_bodynumber"];
            $mc_yearmodel = $_POST["mc_yearmodel"];
            $mc_grosswt = $_POST["mc_grosswt"];
            $mc_netwt = $_POST["mc_netwt"];
            $mc_shippingwt = $_POST["mc_shippingwt"];
            $mc_netcapacity = $_POST["mc_netcapacity"];
            

            $DBCRUDAPI->insert('motorcycles',['mc_mvfile'=>$mc_mvfile,'mc_platenumber'=>$mc_platenumber , 'mc_enginenumber'=>$mc_enginenumber, 'mc_chassisnumber'=>$mc_chassisnumber, 'mc_desposition'=>$mc_desposition, 'mc_desposition'=>$mc_pistondisplacement, 'mc_numberofcylinders'=>$mc_numberofcylinders, 'mc_fuel'=>$mc_fuel, 'mc_make'=>$mc_make, 'mc_series'=>$mc_series, 'mc_bodytype'=>$mc_bodytype, 'mc_bodynumber'=>$mc_bodynumber, 'mc_yearmodel'=>$mc_yearmodel, 'mc_grosswt'=>$mc_grosswt, 'mc_netwt'=>$mc_netwt, 'mc_shippingwt'=>$mc_shippingwt, 'mc_netcapacity'=>$mc_netcapacity]);

            echo json_encode("success");
            
        }else if(isset($_POST['update'])){
            
            $mc_id = $_POST["mc_id"];
            $mc_mvfile = $_POST["mc_mvfile"];
            $mc_platenumber = $_POST["mc_platenumber"];
            $mc_enginenumber = $_POST["mc_enginenumber"];
            $mc_chassisnumber = $_POST["mc_chassisnumber"];
            $mc_desposition = $_POST["mc_desposition"];
            $mc_pistondisplacement = $_POST["mc_pistondisplacement"];
            $mc_numberofcylinders = $_POST["mc_numberofcylinders"];
            $mc_fuel = $_POST["mc_fuel"];
            $mc_make = $_POST["mc_make"];
            $mc_series = $_POST["mc_series"];
            $mc_bodytype = $_POST["mc_bodytype"];
            $mc_bodynumber = $_POST["mc_bodynumber"];
            $mc_yearmodel = $_POST["mc_yearmodel"];
            $mc_grosswt = $_POST["mc_grosswt"];
            $mc_netwt = $_POST["mc_netwt"];
            $mc_shippingwt = $_POST["mc_shippingwt"];
            $mc_netcapacity = $_POST["mc_netcapacity"];

            $DBCRUDAPI->update('motorcycles',['mc_mvfile'=>$mc_mvfile,'mc_platenumber'=>$mc_platenumber , 'mc_enginenumber'=>$mc_enginenumber, 'mc_chassisnumber'=>$mc_chassisnumber, 'mc_desposition'=>$mc_desposition, 'mc_desposition'=>$mc_pistondisplacement, 'mc_numberofcylinders'=>$mc_numberofcylinders, 'mc_fuel'=>$mc_fuel, 'mc_make'=>$mc_make, 'mc_series'=>$mc_series, 'mc_bodytype'=>$mc_bodytype, 'mc_bodynumber'=>$mc_bodynumber, 'mc_yearmodel'=>$mc_yearmodel, 'mc_grosswt'=>$mc_grosswt, 'mc_netwt'=>$mc_netwt, 'mc_shippingwt'=>$mc_shippingwt, 'mc_netcapacity'=>$mc_netcapacity],"mc_id='$mc_id'");
        }else if(isset($_POST['delete'])){
            
            $mc_id = $_POST["mc_id"];

            $DBCRUDAPI->delete('motorcycles',"mc_id='$mc_id'");

        }else{
            $dataid = "mc_id=" . $_POST['mc_id'];
            $DBCRUDAPI->select("motorcycles","*",$dataid);
            $getData = $DBCRUDAPI->sql;
            $res = array();
            while($datass = mysqli_fetch_assoc($getData)){
                $res = $datass;
            }
            echo json_encode($res);
        }
    }


?>
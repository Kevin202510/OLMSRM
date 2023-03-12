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
            $motor_name = $_POST["motor_name"];
            $image = $_POST["image"];
            $motor_engineType = $_POST["motor_engineType"];
            $motor_displacement = $_POST["motor_displacement"];
            $motor_startingsystem = $_POST["motor_startingsystem"];
            $motor_borestroke = $_POST["motor_borestroke"];
            $motor_brakeTypeFront = $_POST["motor_brakeTypeFront"];
            $motor_brakeTypeRear = $_POST["motor_brakeTypeRear"];
            $motor_tiresizeFront = $_POST["motor_tiresizeFront"];
            $motor_tiresizeRear = $_POST["motor_tiresizeRear"];
            $motor_wheelType = $_POST["motor_wheelType"];
            $motor_overallDimension = $_POST["motor_overallDimension"];
            $motor_curbweight = $_POST["motor_curbweight"];
            $motor_seatheight = $_POST["motor_seatheight"];
            $motor_groundClearance = $_POST["motor_groundClearance"];
            $motor_fuelTankCapacity = $_POST["motor_fuelTankCapacity"];
            $motor_fuelSystem = $_POST["motor_fuelSystem"];
            $motor_batteryType = $_POST["motor_batteryType"];
            $motor_engineOilCapacity = $_POST["motor_engineOilCapacity"];
            $motor_gearShiftPattern = $_POST["motor_gearShiftPattern"];
            $motor_description = $_POST["motor_description"];
            

            $DBCRUDAPI->insert('motorcycles',['motor_name'=>$motor_name,'image'=>$image , 'motor_engineType'=>$motor_engineType, 'motor_displacement'=>$motor_displacement, 'motor_startingsystem'=>$motor_startingsystem, 'motor_borestroke'=>$motor_borestroke, 'motor_brakeTypeFront'=>$motor_brakeTypeFront, 'motor_brakeTypeRear'=>$motor_brakeTypeRear, 'motor_tiresizeFront'=>$motor_tiresizeFront, 'motor_tiresizeRear'=>$motor_tiresizeRear, 'motor_wheelType'=>$motor_wheelType, 'motor_overallDimension'=>$motor_overallDimension, 'motor_curbweight'=>$motor_curbweight, 'motor_seatheight'=>$motor_seatheight, 'motor_groundClearance'=>$motor_groundClearance,'motor_fuelTankCapacity'=>$motor_fuelTankCapacity, 'motor_fuelSystem'=>$motor_fuelSystem, 'motor_batteryType'=>$motor_batteryType, 'motor_engineOilCapacity'=>$motor_engineOilCapacity, 'motor_gearShiftPattern'=>$motor_gearShiftPattern, 'motor_description'=>$motor_description]);

            echo json_encode("success");
            
        }else if(isset($_POST['update'])){
            
            $motor_name = $_POST["motor_name"];
            $image = $_POST["image"];
            $motor_engineType = $_POST["motor_engineType"];
            $motor_displacement = $_POST["motor_displacement"];
            $motor_startingsystem = $_POST["motor_startingsystem"];
            $motor_borestroke = $_POST["motor_borestroke"];
            $motor_brakeTypeFront = $_POST["motor_brakeTypeFront"];
            $motor_brakeTypeRear = $_POST["motor_brakeTypeRear"];
            $motor_tiresizeFront = $_POST["motor_tiresizeFront"];
            $motor_tiresizeRear = $_POST["motor_tiresizeRear"];
            $motor_wheelType = $_POST["motor_wheelType"];
            $motor_overallDimension = $_POST["motor_overallDimension"];
            $motor_curbweight = $_POST["motor_curbweight"];
            $motor_seatheight = $_POST["motor_seatheight"];
            $motor_groundClearance = $_POST["motor_groundClearance"];
            $motor_fuelTankCapacity = $_POST["motor_fuelTankCapacity"];
            $motor_fuelSystem = $_POST["motor_fuelSystem"];
            $motor_batteryType = $_POST["motor_batteryType"];
            $motor_engineOilCapacity = $_POST["motor_engineOilCapacity"];
            $motor_gearShiftPattern = $_POST["motor_gearShiftPattern"];
            $motor_description = $_POST["motor_description"];

            $DBCRUDAPI->insert('motorcycles',['motor_name'=>$motor_name,'image'=>$image , 'motor_engineType'=>$motor_engineType, 'motor_displacement'=>$motor_displacement, 'motor_startingsystem'=>$motor_startingsystem, 'motor_borestroke'=>$motor_borestroke, 'motor_brakeTypeFront'=>$motor_brakeTypeFront, 'motor_brakeTypeRear'=>$motor_brakeTypeRear, 'motor_tiresizeFront'=>$motor_tiresizeFront, 'motor_tiresizeRear'=>$motor_tiresizeRear, 'motor_wheelType'=>$motor_wheelType, 'motor_overallDimension'=>$motor_overallDimension, 'motor_curbweight'=>$motor_curbweight, 'motor_seatheight'=>$motor_seatheight, 'motor_groundClearance'=>$motor_groundClearance,'motor_fuelTankCapacity'=>$motor_fuelTankCapacity, 'motor_fuelSystem'=>$motor_fuelSystem, 'motor_batteryType'=>$motor_batteryType, 'motor_engineOilCapacity'=>$motor_engineOilCapacity, 'motor_gearShiftPattern'=>$motor_gearShiftPattern, 'motor_description'=>$motor_description],"motor_id='$motor_id'");
        }else if(isset($_POST['delete'])){
            
            $motor_id = $_POST["motor_id"];

            $DBCRUDAPI->delete('motorcycles',"motor_id='$motor_id'");

        }else{
            $dataid = "motor_id=" . $_POST['motor_id'];
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
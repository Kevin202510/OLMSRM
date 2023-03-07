<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("agents","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $agent_name = $_POST["agent_name"];
            $agent_address = $_POST["agent_address"];
            $agent_contact = $_POST["agent_contact"];
            $agent_since_when = $_POST["agent_since_when"];

            $DBCRUDAPI->insert('agents',['agent_name'=>$agent_name, 'agent_address'=>$agent_address, 'agent_contact'=>$agent_contact, 'agent_since_when'=>$agent_since_when]);

             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
            
        }else if(isset($_POST['update'])){
            
            $agent_id = $_POST["id"];
            $agent_name = $_POST["agent_name"];
            $agent_address = $_POST["agent_address"];
            $agent_contact = $_POST["agent_contact"];
            $agent_since_when = $_POST["agent_since_when"];

            $DBCRUDAPI->update('agents',['agent_name'=>$agent_name, 'agent_address'=>$agent_address, 'agent_contact'=>$agent_contact, 'agent_since_when'=>$agent_since_when],"id='$agent_id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
        }else if(isset($_POST['delete'])){
            
            $agent_id = $_POST["id"];

            $DBCRUDAPI->delete('agents',"id='$agent_id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }

        }
    }


?>
<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("applicants_spouse","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $app_fname = $_POST["app_fname"];
            $app_mname = $_POST["app_mname"];
            $app_lname = $_POST["app_lname"];
            $app_age = $_POST["app_age"];
            $app_dob = $_POST["app_dob"];
            $app_smarried = $_POST["app_smarried"];
            $app_religion = $_POST["app_religion"];
            $app_nickname = $_POST["app_nickname"];
            $app_pres_address = $_POST["app_pres_address"];
            $app_paddress = $_POST["app_paddress"];
            $app_haddress = $_POST["app_haddress"];
            $app_bplace = $_POST["app_bplace"];
            $app_nodc = $_POST["app_nodc"];
            $app_ohl = $_POST["app_ohl"];
            $app_lor = $_POST["app_lor"];
            $app_ohrl = $_POST["app_ohrl"];
            $app_oname = $_POST["app_oname"];
            $app_loresidences = $_POST["app_loresidences"];
            $app_cnumber = $_POST["app_cnumber"];
            $app_firm = $_POST["app_firm"];
            $app_address = $_POST["app_address"];
            $app_position = $_POST["app_position"];
            $app_salary = $_POST["app_salary"];
            $app_loservices = $_POST["app_loservices"];
            $app_bname = $_POST["app_bname"];
            $app_baddress = $_POST["app_baddress"];
            $app_lobusiness = $_POST["app_lobusiness"];
            $app_swo = $_POST["app_swo"];
            $app_capital = $_POST["app_capital"];
            $app_nincome = $_POST["app_nincome"];
            $app_oincome = $_POST["app_oincome"];

            $DBCRUDAPI->insert('applicants_spouse',['app_fname'=>$app_fname,'app_mname'=>$app_mname ,'app_lname'=>$app_lname ,'app_age'=>$app_age ,'app_dob'=>$app_dob ,'app_smarried'=>$app_smarried ,'app_religion'=>$app_religion ,'app_nickname'=>$app_nickname ,'app_pres_address'=>$app_pres_address ,'app_paddress'=>$app_paddress ,'app_haddress'=>$app_haddress ,'app_bplace'=>$app_bplace ,'app_nodc'=>$app_nodc ,'app_ohl'=>$app_ohl ,'app_lor'=>$app_lor ,'app_ohrl'=>$app_ohrl ,'app_oname'=>$app_oname ,'app_loresidences'=>$app_loresidences ,'app_cnumber'=>$app_cnumber ,'app_firm'=>$app_firm ,'app_address'=>$app_address ,'app_position'=>$app_position ,'app_salary'=>$app_salary ,'app_loservices'=>$app_loservices ,'app_bname'=>$app_bname ,'app_baddress'=>$app_baddress ,'app_lobusiness'=>$app_lobusiness ,'app_swo'=>$app_swo ,'app_capital'=>$app_capital ,'app_nincome'=>$app_nincome ,'app_oincome'=>$app_oincome]);

             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
            
        }else if(isset($_POST['update'])){
            
            $id = $_POST["id"];
            $app_fname = $_POST["app_fname"];
            $app_mname = $_POST["app_mname"];
            $app_lname = $_POST["app_lname"];
            $app_age = $_POST["app_age"];
            $app_dob = $_POST["app_dob"];
            $app_smarried = $_POST["app_smarried"];
            $app_religion = $_POST["app_religion"];
            $app_nickname = $_POST["app_nickname"];
            $app_pres_address = $_POST["app_pres_address"];
            $app_paddress = $_POST["app_paddress"];
            $app_haddress = $_POST["app_haddress"];
            $app_bplace = $_POST["app_bplace"];
            $app_nodc = $_POST["app_nodc"];
            $app_ohl = $_POST["app_ohl"];
            $app_lor = $_POST["app_lor"];
            $app_ohrl = $_POST["app_ohrl"];
            $app_oname = $_POST["app_oname"];
            $app_loresidences = $_POST["app_loresidences"];
            $app_cnumber = $_POST["app_cnumber"];
            $app_firm = $_POST["app_firm"];
            $app_address = $_POST["app_address"];
            $app_position = $_POST["app_position"];
            $app_salary = $_POST["app_salary"];
            $app_loservices = $_POST["app_loservices"];
            $app_bname = $_POST["app_bname"];
            $app_baddress = $_POST["app_baddress"];
            $app_lobusiness = $_POST["app_lobusiness"];
            $app_swo = $_POST["app_swo"];
            $app_capital = $_POST["app_capital"];
            $app_nincome = $_POST["app_nincome"];
            $app_oincome = $_POST["app_oincome"];

            $DBCRUDAPI->update('applicants_spouse',['app_fname'=>$app_fname,'app_mname'=>$app_mname ,'app_lname'=>$app_lname ,'app_age'=>$app_age ,'app_dob'=>$app_dob ,'app_smarried'=>$app_smarried ,'app_religion'=>$app_religion ,'app_nickname'=>$app_nickname ,'app_pres_address'=>$app_pres_address ,'app_paddress'=>$app_paddress ,'app_haddress'=>$app_haddress ,'app_bplace'=>$app_bplace ,'app_nodc'=>$app_nodc ,'app_ohl'=>$app_ohl ,'app_lor'=>$app_lor ,'app_ohrl'=>$app_ohrl ,'app_oname'=>$app_oname ,'app_loresidences'=>$app_loresidences ,'app_cnumber'=>$app_cnumber ,'app_firm'=>$app_firm ,'app_address'=>$app_address ,'app_position'=>$app_position ,'app_salary'=>$app_salary ,'app_loservices'=>$app_loservices ,'app_bname'=>$app_bname ,'app_baddress'=>$app_baddress ,'app_lobusiness'=>$app_lobusiness ,'app_swo'=>$app_swo ,'app_capital'=>$app_capital ,'app_nincome'=>$app_nincome ,'app_oincome'=>$app_oincome],"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('applicants_spouse',"id='$id'");

            if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }

        }
    }


?>
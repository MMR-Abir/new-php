<?php 
 class Haki{
    public $Pdf;

    function __construct($Shanks){
        $this->Pdf = $Shanks;
    }
    
    function WindBreaker(){
        $Info = $this->Pdf;
        $Name = $Info['name'];
        $Tmp_Name = $Info['tmp_name'];
        $FileSize = $Info['size'];
        $AllowedSize = 5242880;
        $AllowedExt = ["jpg","jpeg","png","pdf"];

        $Data = pathinfo($Name);
        $Ext =strtolower($Data['extension']);
        $Errors = [];

        if($FileSize > $AllowedSize){
            $Errors[] = "Pdf or Image must be within 5 MB";
        }

        if(!in_array($Ext, $AllowedExt )){
            $Errors[] = "Pdf or Image must be in jpg, jpeg , png , pdf";
        }

        if(count($Errors) > 0){
            foreach($Errors as $Err){
                echo $Err . "<br>";
            }
        }

        else {
            if(move_uploaded_file($Tmp_Name, "uploded/".$Name)){
                echo "Validation OK";
            }
        }


    }
 }



?>
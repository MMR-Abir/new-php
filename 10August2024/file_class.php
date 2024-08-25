<?php 
class file{
    public $fileinfo;
    public function __construct($x){
        $this->fileinfo = $x;
    }

    public function upload(){
       $Info = $this->fileinfo;
      // print_r($Info);
       $Name = $Info['name'];
       $Tmp_Name = $Info['tmp_name'];
       $filesize = $Info['size'];
       $allowedsize = 512000;
       $allowedtypes = ["jpg","jpeg","png"];
       $Errors =[];

       $data = pathinfo($Name);
       $Ext = strtolower($data['extension']);

       if($filesize > $allowedsize ){
        $Errors[] = "File size must be within 500kb";
       }

       if(!in_array($Ext, $allowedtypes)){
        $Errors[] = "File type must be jpg and png";
       }

       if(count($Errors) > 0 ){
        foreach($Errors as $Err){
            echo $Err . "<br>" ;
        }
        }

        else{
            if(move_uploaded_file($Tmp_Name,"uploads/" .$Name )){
                echo "Upload Successfully";
        }
       }

       
    }
}

?>
 
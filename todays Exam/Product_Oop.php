<?php

if(isset($_REQUEST['submit'])){
    $stid = $_REQUEST["Nid"] ;
    // echo $stid ;
    $obj = new pRODUCT("result.txt");
    $obj->Show_result($stid);
}


class pRODUCT{

    public $datas;
    public $arraydata;

    public function __construct($file){
        $this->datas = $file ;
        $this->arraydata = file($this->datas) ;
    }

function Show_result($stid) {
        
        foreach($this->arraydata as $data){
            $line =  explode(",", $data) ;
            list($pid, $pname, $pprice) = $line ;
            if($pid == $stid){
              
              $output = "ID: " . $pid . "<br> " ."Name: " .  $pname. "<br>" . "Price: " . $pprice;
             
            }
              
          }

           echo $output ;

    //  return $output ; 
}

}    
    

?>





    <form action="" method="post">
        <select name="Nid" id="">
        <option value="">Select One</option>
            <option value="P100">Dove</option>
            <option value="P200">Ponds</option>
            <option value="P300">Head $ sHOULDER</option>
        </select>

        <input type="submit" name="submit" value="SHOW RESULT">
    </form>
</body>
</html>
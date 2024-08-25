<?php

if(isset($_REQUEST['submit'])){
    $stid = $_REQUEST["naruto"] ;
    // echo $stid ;
    // $obj = new Student("result.txt");
    // $obj->Show_result($stid);
}




class Student{

    public $datas;
    public $arraydata;


    public function __construct($file){
        $this->datas = $file ;
        $this->arraydata = file($this->datas) ;
    }

function Show_result($stid) {
        
        foreach($this->arraydata as $data){
            $line =  explode("|", $data) ;
            list($id, $name, $score, $result) = $line ;
            if($id == $stid){
              
              $output = "ID: " . $id . "<br> " ."Name: " .  $name. "<br>" . "Score: " . $score . "<br>" ."Result: " .$result ;
              
              
              
              
             
            }
      
              
          }

           echo $output ;

    //  return $output ; 
}

}    
    

?>





    <form action="" method="post">
        <select name="naruto" id="">
        <option value="">Select One</option>
            <option value="1">Saif</option>
            <option value="2">Zamil</option>
            <option value="3">Tanim</option>
        </select>

        <input type="submit" name="submit" value="SHOW RESULT">
    </form>
</body>
</html>
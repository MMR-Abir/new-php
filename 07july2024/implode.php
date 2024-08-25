<?php
 $cities = array("Columbus", "Akron", "Cleveland", "Cincinnati");
echo "<pre>"  ;
 print_r($cities) ;
 //echo implode("|", $cities);

 $string = implode("|", $cities);
 echo "<pre>"  ;
 //print_r($string) ;
 var_dump($string);
 ?>
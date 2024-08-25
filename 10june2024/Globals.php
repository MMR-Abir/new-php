<?php
$x = 5;
$y = 10;

function Sum(){
    global $x , $y ;
    $y = $x + $y ;
}
 Sum();
 echo $y; //output 15;
 echo "<pre>";
  print_r($GLOBALS);



?>
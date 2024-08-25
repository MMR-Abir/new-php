<?php 

$Capital =["Bangladesh" => "Dhaka", "Srilanka" => "Colombo", "Nepal"=> "Kathmandu","Australia" => "Canbera","Newzeland" => "Waylington"];

ksort($Capital) ;


echo "<pre>" ;
print_r($Capital) ;

echo "<hr>" ;
krsort($Capital) ;
print_r($Capital) ;


?>
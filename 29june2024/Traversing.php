<?php 

$Students =array(
    "Bangladesh" =>"Dhaka",
    "Nepal" =>"Kathmandu",
    "Bhutan" =>"Thimpu"
 );

 while($country = key($Students)) {
    echo $country . "<br>";
    next($Students);
 }



<?php 
$states = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];


echo "<pre>";
print_r($states) ;  //just show the array's Index
echo "<br>" ;

$stateFrequency = array_count_values($states); //find out how many times array repeated
print_r($stateFrequency);
?>
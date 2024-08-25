<?php 

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");
//$subset = array_slice($states, 4);
$subset = array_slice($states, 4, 2);  // 1st parameter is Index $ 2nd parameter is Length ;
//$subset = array_slice($states, 1, -3);

echo "<pre>" ;
print_r($subset);




?>
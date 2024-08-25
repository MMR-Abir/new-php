<?php
//Numeric Index Array

$Rivers = array("Padma","Meghna","Jamuna","Surma");
echo "<pre>" ;

print_r($Rivers) ;


$Rivers[] = "Tista" ;
$Rivers[] = "Gomti" ;

print_r($Rivers) ;



//Associatiev Array


$Capital =["Bangladesh" => "Dhaka", "Srilanka" => "Colombo", "Nepal"=> "Kathmandu"];
print_r($Capital);

$Capital["Butan"]  = "Thimpu";

print_r($Capital);

// $Capital = array("Bangladesh" => "Dhaka", "Srilanka" => "Colombo", "Nepal"=> "Kathmandu");
// print_r($Capital);

?>
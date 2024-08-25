<?php 

$Students =array(
    "Tanim" =>20,
    "Saif" =>19,
    "Abdullah" =>22
 );

 if(array_key_exists("Tanim", $Students)) {
    echo "Tanim got {$Students["Tanim"]}" ;
 }



?>
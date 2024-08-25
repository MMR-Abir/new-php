<?php 

$Students =array(
    "Tanim" =>20,
    "Saif" =>19,
    "Abdullah" =>22
 );

 $Look = array_search("19",$Students );

 if($Look){
    echo "Found $Look and he scored $Students[$Look]" ;

 }


?>
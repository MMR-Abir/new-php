<?php 
$Haki = new mysqli();

@$Haki-> connect("localhost","root","","evidence2024");

if($Haki->connect_errno){
    echo $Haki->connect_error;
    exit();
}

?>
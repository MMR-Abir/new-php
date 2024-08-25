<?php
 $pswd = "supersecret";
 $pswd2 = "SupersecreT";

 if(strcmp($pswd , $pswd2)== 0){
    echo "Matched" ;
 }

 else{
    echo "Not Matched" ;
 }
 
 echo "<hr>" ;


 if(strcasecmp($pswd , $pswd2)== 0){
    echo "Password Matched" ;
 }

 else{
    echo "Password not Matched" ;
 }
 
//  echo strcmp( $pswd, $pswd2);
 
 ?>
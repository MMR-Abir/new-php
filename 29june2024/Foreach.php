<?php

$Students = array(
                    "Abir",
                    "Abdullah",
                    "Mahmudul",
                    "Rakib",
                    "Jmail"
                 ) ;

                 foreach($Students as $Mad){
                    echo $Mad . "<br>" ;
                 }
                    echo"<hr>" ;

                 //Associative Array
                 $Students =array(
                    "Tanim" =>20,
                    "Saif" =>19,
                    "Abdullah" =>22
                 );
                 
                 foreach($Students as $student => $roll){
                    echo "$student : $roll  <br>" ;
                 }

?>
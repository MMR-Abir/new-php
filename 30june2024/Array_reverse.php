<?php 

$state = array(0 => "Delaware", 1 => "Pennsylvania", 2 => "New Jersey");
echo "<pre>" ;
print_r($state) ;
echo "<br>" ;

echo "<pre>" ;
 $state = array_reverse($state);
 print_r($state);

 echo "<pre>" ;
 $state = array_reverse($state,1);
 print_r($state);


?>
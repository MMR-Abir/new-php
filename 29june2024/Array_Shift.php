<?php 

 $states = ["Ohio",
            "Murray",
            "California",
            "Los Angelees"
 
];

$del = array_shift($states);
echo "<pre>" ;
print_r($states) ;

echo "<br>";

echo $del;


?>
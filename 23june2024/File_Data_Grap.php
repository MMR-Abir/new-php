<?php

   $data = file("user.txt");
//    gettype($data) ;
//    var_dump($data) ;
//    echo "<pre> " ;
//    print_r($data);
echo "<table border = '1'>" ;
echo "<tr><th>Name</th><th>Preffesion</th><th>Color</th></tr>" ;
foreach($data as $Info){
    $naruto = explode ("|", $Info) ;
    list($name, $proffesion, $color) = $naruto ;
    echo "<tr><td>$name</td><td>$proffesion</td><td>$color</td></tr>" ;

}


echo "</table>" ;
?>
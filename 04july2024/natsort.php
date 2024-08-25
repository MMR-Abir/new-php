<?php 

$picture = array("picture1.jpg", "picture10.jpg", "picture2.jpg", "Picture20.jpg","picture8.jpg","Picture11.jpg","picture17.jpg","picture23.jpg","picture9.jpg","picture7.jpg","picture5.jpg");
echo "<pre>" ;
sort($picture) ;

echo "<br>" ;

print_r($picture) ;

echo "<pre>" ;
natsort($picture) ;

echo "<br>" ;

print_r($picture) ;

echo "<pre>" ;
natcasesort($picture) ;

echo "<br>" ;

print_r($picture) ;

?>
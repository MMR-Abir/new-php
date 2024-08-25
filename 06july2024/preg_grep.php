<?php
 $foods = array("pasta", "steak", "fish", "potatoes");
 $food = preg_grep("/^p/", $foods); // ^p means a word start with p;

 $foodie = preg_grep("/k$/", $foods); // a$ means a word ended with a ;

 print_r($food);  

 echo "<hr>" ;

 print_r($foodie); 
 ?>
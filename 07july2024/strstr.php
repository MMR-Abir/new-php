<?php
 $url = "sales@example.com";
//  $withdot= strstr($url, ".");
//  $withoutdot = ltrim($withdot, ".") ;
 $withoutdot= ltrim(strstr($url, "."));
 echo $withoutdot; 
 ?>
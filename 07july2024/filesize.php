<?php
 $path = 'files/users.txt';
//  echo filesize($path) ;

 $path = 'files/books.pdf';
 $mb = filesize($path)/1024/1024 ;
 echo round($mb, 2) . " Megabyte" ;
 
 ?>
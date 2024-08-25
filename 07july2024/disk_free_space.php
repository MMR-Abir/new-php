<?php
 $drive = 'c:';
 $check =  'f:' ;
 
 echo disk_free_space($drive)/1024/1024/1024; 

 echo "<hr>" ;

 echo disk_free_space($check)/1024/1024/1024;
 ?>
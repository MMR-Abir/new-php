<?php
 $file = 'files/users.txt';
 //echo fileatime($file);
 echo "Created Time: " . date("m-d-y  g:i:sa", filectime($file)) . "<br>" ;
 echo "Modified Time: " . date("m-d-y  g:i:sa", filemtime($file))  . "<br>" ;
 echo "Access Time: " .date("m-d-y  g:i:sa", fileatime($file)) . "<br>" ;

 ?>
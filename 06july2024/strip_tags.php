<?php 

$input = "I just can't get <br> enough <br> of <h1> PHP! </h1>" ;

echo strip_tags($input);

echo"<hr>" ;



 $input = "This <a href='http://www.example.com/'>example</a>
 is <b>awesome</b>!";
 echo strip_tags($input, "<a>");
 


?>
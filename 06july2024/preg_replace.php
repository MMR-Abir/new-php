<?php
 $text = "This is a link to http://www.wjgilmore.com/ and http://www.prothomalo.com/.";
 echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\"> \${0} </a>", 
$text);
 ?>
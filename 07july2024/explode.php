<?php
 $summary = <<<summary
 The most up to date source for PHP documentation is the PHP manual.
 It contins many examples and user contributed code and comments.
 It is available on the main PHP web site
 <a href="http://www.php.net">PHP’s</a>.
 Lorem, ipsum dolor sit amet consectetur adipisicing elit. At sint tempore beatae architecto minus repellat recusandae modi adipisci ad cumque ducimus, quasi earum dolore vero cupiditate amet consectetur quia impedit?
 summary;
 $words = sizeof(explode(' ',strip_tags($summary)));
 echo "Total words in summary: $words";
 ?>

 
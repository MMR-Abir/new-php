<?php
//  // Open a text file for reading purposes
//  $fh = fopen('files/users.txt', 'r');
//  //print_r($fh) ;
// // echo fgets($fh);
//  // While the end-of-file hasn't been reached, retrieve the next line
//  while (!feof($fh)) {
//     echo fgets($fh) . "<br>";
//  }
 
//  // Close the file
//  fclose($fh);
 ?>
 

 <?php 
 
  // Open a text file for writing  purposes
//   $fh = fopen('files/users.txt', 'w');
//   fwrite($fh , "Hello Fokkinni");
//   fclose($fh);

//   $fh = fopen('files/users.txt', 'r');
  
//   while (!feof($fh)) {
//      echo fgets($fh) . "<br>";
//   }
  
//   // Close the file
//   fclose($fh);
 
 
 
 
 ?>

 <?php 
 
 $fh = fopen('files/users.txt', 'a');
  fwrite($fh , "<br>Hello Fokkinni");
  fclose($fh);

  $fh = fopen('files/users.txt', 'r');
  
  while (!feof($fh)) {
     echo fgets($fh) . "<br>";
  }
  
  // Close the file
  fclose($fh);

  unlink('files/users.txt');
 print_r($GLOBALS ) ;
 
 
 ?>
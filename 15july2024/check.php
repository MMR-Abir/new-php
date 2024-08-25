<?php 

$userName = "abdullah@gmail.com";
$userPass = "123456789";
$email = $_POST['email'];
$password = $_POST['pass'];
// echo "<br>";
// echo $_POST['pass'];

if($email == $userName && $password == $userPass){
    session_start();
     $_SESSION['email'] =$email ;

         //print_r($_SESSION);
        header("location: session.php"); 
}

else{
    header("location: login.php");
}



?>
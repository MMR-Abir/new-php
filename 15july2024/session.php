<?php 

session_start();
if(!isset($_SESSION['email'])){
    header("location: login.php");
}
// echo $_SESSION['email'];
//echo $_SESSION['pass'];


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is home page</h1> <br>
    <a href="logout.php">Logout</a>
</body>
</html>
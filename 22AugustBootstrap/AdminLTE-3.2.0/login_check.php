

<?php

if(isset($_POST['submit'])){
  include_once("dbconfig.php");
  session_start();
  $Email =$_POST['email'];
  $Pass =$_POST['pass'];
  $Pass =md5($Pass);

$sql="SELECT * FROM admins WHERE Email='$Email' AND Password = '$Pass'";

$result =$db->query($sql);
$row=$result->fetch_array();

if ($result->num_rows == 0){
  $_SESSION['error'] ="Email or Password is wrong";
  header("location:index.php");
}

else{
$_SESSION['name']=$row['FullName'];
$_SESSION['email']=$Email;
header("location:dashboard.php");
}


}





?>

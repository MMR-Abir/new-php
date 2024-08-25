<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Email Validation</h1>
    <?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'] ;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Not a valid Email" ;
    }

    else{
        echo "Email IS Validate" ;
    }
}

    ?>

<form action="" method="post">
    <input type="text" name="email" placeholder="Enter your Email"> <br>
    <input type="submit" name="submit" value="submit">
</form>


</body>
</html>








<?php 






?>
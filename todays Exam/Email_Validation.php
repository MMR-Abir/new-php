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
    $email = $_POST['mail'] ;
    $password = $_POST['pass'] ;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Not a valid Email" ;
    }

    else if(strlen($password)< 6 ){
        echo "Use minimum 6 Charature" ;
    }

    
    else{
        echo "Login Successful!" ;
    }
}

    ?>

<form action="" method="post">
    <input type="text" name="mail" placeholder="Enter your Email"> <br>
    <input type="text" name="pass" placeholder="Use Password"> <br>
    <input type="submit" name="submit" value="submit">
</form>


</body>
</html>
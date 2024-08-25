<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Validation</title>
</head>
<body>

   <?php 

    if(isset($_POST['submit'])){
        echo MailValidation();
    }



    function MailValidation(){
        $Email = $_POST['User'];
       // $Pass = $_POST['pass'];
    //    $user ='/^[A-z0-9]{4,8}+@$/';
       //'/^[A-z0-9]{4,8}+@[A-z]$/'

       if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        return "Email is not valid";
    }

    //    if(!preg_match($user , $Email)){
    //         return "Username must be 4 to 8 Character";
    //     }

    //    else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
    //         return "@ must be given";
    //     }

        else{
            return "Login Successful";
        }
    }
   ?>





    <form action="" method="post">
        UserName:
        <input type="text" name="User" placeholder="Write your username"> <br>
        Password:
        <input type="password" name="pass" placeholder="Enter Password"> <br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
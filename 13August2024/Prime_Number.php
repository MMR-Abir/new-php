<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if(isset($_POST['submit'])){
    $prime = $_POST['number'];
    echo Test_Prime($prime);
}


function Test_Prime($number){
    if($number ==0){
        return "$number is not a prime number";
    }

    if($number ==1){
        return "$number is not a prime number";
    }

    if($number ==2){
        return "$number is  a prime number";
    }

    else{
        for($i=2 ; $i < $number; $i++){
            if($number % $i == 0){
                return "$number is not a prime number";
            }
        }

        return "$number is a prime number";
    }
}


?>






    <form action="" method="post">
        <input type="text" name="number" placeholder="Write the Number">
        <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
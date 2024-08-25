<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>


<?php 
if(isset($_POST['submit'])){
    $prime = $_POST['number'];

    echo PrimeNumber($prime );
}


  function PrimeNumber($x){
     if($x == 0){
        return  $x ." is not a prime Number";
     }

     if($x == 1){
        return  $x ." is not a prime Number";
     }

     if($x == 2){
        return $x ." is a prime Number";
     }

     else{
        for($i = 2 ; $i < $x ; $i++){
            if($x % $i ==0){
                return $x ." is not a prime Number";
            }
        }

        return $x . " is a prime Number";
     }
 }


?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Input Number"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
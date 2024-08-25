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
    $Fact = $_POST['Number'];
    echo factORIAL($Fact) ;
}

function factORIAL($fact){
        $N = 1 ;
        for( $y = 1 ; $y <= $fact ; $y++ ){
             $N = $N * $y ;
        }
        // echo("The Factorial of " . $fact . " is " . $N) ;
        echo( $N) ;
}

?>
    <form action="" method="post">
        <input type="text" name="Number" id="">

        <input type="submit" name="submit" value="CHEAK">
    </form>
</body>
</html>
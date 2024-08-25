<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>

<?php 
if(isset($_POST['submit'])){
    $Fun = $_POST['fact'];
    echo Factorial($Fun);
}

function Factorial($Haki){
    $N=1;

    for($i= 1 ; $i <= $Haki; $i++){
        $N = $N * $i ;
    }

    echo ($N . " is the facorial of " . $Haki);
}
?>
    <form action="" method="post">
        <input type="text" name="fact" placeholder="Write the number">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
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
    echo $_POST['number'] ;
    $nu = $_POST['number'] ;
    echo TEST_PRIME($nu) ;
}

    
function TEST_PRIME($number){
    if($number == 0){
        return  " is not a proper value"; 
    }

    if($number == 1){
        return  " is not a prime number";  
    }

    if($number == 2){
        return  " is  a prime number";   
    }

 else{
    for( $i = 2 ; $number > $i ; $i++){
        if($number % $i == 0){
            return  " is not a prime number";  
        }

        
    }
    
    return  " is  a prime number";  
    
 }

}
    





?>
    <form action="" method="post">
        <input type="text" name="number" id="">
        <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>
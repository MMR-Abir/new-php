<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maximum $ Minimum Number</h1>
    <?php 
    if(isset($_POST['submit'])){
        $Numbers = $_POST['Number'];
       //gettype($Number);
       $Cot = explode (",", $Numbers) ;
       $max = $Cot[0];
       $min = $Cot[0];

       for($i = 1 ; $i <count($Cot) ; $i++){
            if($Cot[$i] > $max){
                $max = $Cot[$i];
            }
       

       if($Cot[$i] < $min){
        $min = $Cot[$i];
    }
        
}     
        echo "Among these numbers $Numbers<br>";
        echo "Maximum Number: $max" . "<br>Minimum Number : $min";    
            
        }

    
    
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="Number" placeholder="Enter All Numbers">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
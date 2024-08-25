<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Value</title>
</head>
<body>
     
   <?php 
   if(isset($_POST['submit'])){
        $fact = $_POST['num'];
        echo Prime_Check($fact);
   }

   function Prime_Check($x){
       $Fact = 1;

       for($i = 1; $i <= $x ; $i++){
            $Fact = $Fact * $i;
       }

       return $Fact . " is the Factorial of " . $x;
   }
    ?>


    <form action="" method="post">
        <input type="text" name="num" placeholder="Input Number"> <br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum Minimum Number</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
        $Number = $_POST['num'];

        $Hawk = explode(",",$Number);

        $max = $Hawk[0];
        $min = $Hawk[0];

        for($i = 1 ; $i < count($Hawk) ; $i++){
            if($Hawk[$i] > $max){
                $max = $Hawk[$i];
            }

            if($Hawk[$i] < $min){
                $min = $Hawk[$i];
            }
        }

        echo "Among these number " . $Number . "<br>" ;
        echo "Maximum number: " . $max . "<br>" . "Minimum Number: " . $min;
    }
    
    
    ?>


    <form action="" method="post">
        <input type="text" name="num"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
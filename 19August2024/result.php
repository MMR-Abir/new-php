<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Show</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $Grade = $_POST['grade'];

        echo Grade_Find($Grade);
    }

    function Grade_Find($x){
        if($x == "A"){
            return $x . " : Result is Excellent";
        }

        if($x == "B"){
            return $x. " : Result is Good";
        }

        if($x == "C"){
            return $x. " : Result is Fair";
        }

        if($x == "D"){
            return $x. " : Result is Poor";
        }
    }
    
    
    ?>

    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter your Grade"> 

        <input type="submit" name="submit" value="submit">
    
    </form>
</body>
</html>
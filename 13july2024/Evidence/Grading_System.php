<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading</title>
</head>
<body>
    <h1>Grading System</h1>

    <?php 
    if(isset($_POST['submit'])){
        $grade = $_POST['grade'];
        $grade =  strtoupper($grade);

        switch($grade){
            case "A+":
            echo "Excellent";
            break;
            case "A":
            echo "Good";
            break;
            case "A-":
            echo "Avarage";
            break;
            case "B":
            echo "Below Avarage";
            break;
            case "C":
            echo "Below Avarage";
            break;
            case "D":
            echo "Not Good";
            break;
            default:
            echo "Fail";
            
            
        }
    }
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter Grade letter"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
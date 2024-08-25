<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Sorting</title>
</head>
<body>
    <h1>Country and Capital where Country Wise Sorting</h1>

    <?php 
    $Countries = [
        "Bangladesh" =>"Dhaka",
        "Srilanka" =>"Colombo",
        "Uganada" =>"Kampola",
        "Egypt" =>"Kairo",
        "China" =>"Beijing",
        "Japan" =>"Tokyo"
        
    ];
    echo"<pre>";
    print_r($Countries);
    echo "<hr>";

    $output =ksort($Countries);
    foreach($Countries as $country => $capital){
        echo "$country ->$capital <br>" ;
    }
    
    ?>
</body>
</html>
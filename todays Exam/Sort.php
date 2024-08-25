<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Sorting</title>
</head>
<body>
    <h1>Names and Places where Country Wise Sorting</h1>

    <?php 
    $Names = [
        "Mostafizur" =>"Khulna",
        "Tanim" =>"Dhaka",
        "Joys" =>"Narayangong",
        "Abdullah" =>"Cumilla",
        "Rakib" =>"Narayangong",
        "Mahmudul" =>"Barishal"
        
    ];
    echo"<pre>";
    print_r($Names);
    echo "<hr>";

    $output =ksort($Names);
    foreach($Names as $Name => $Place){
        echo "$Name ->$Place <br>" ;
    }
    
    ?>
</body>
</html>
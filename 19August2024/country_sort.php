<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Sort</title>
</head>
<body>
    <?php 
    
    $countries = [
        "Bangladesh" => "Dhaka",
        "Nepal" => "Kathmandu",
        "Bhutan" => "Thimpu",
        "Pakistan" => "Islamabad"
    ];

    echo "<pre>";
    print_r($countries);
    echo "<hr>";

    krsort($countries);

    foreach($countries as $country=>$Capital){
        echo "$country=>$Capital <br>";
    }
    
    
    
    ?>
</body>
</html>
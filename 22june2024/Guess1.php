<?php
  if(isset($_POST['Submit'])){
    
switch ($_POST['category']) {




    case "news":
    echo "What's happening around the world";
    break;
    case "weather":
    echo "Your weekly forecast";
    break;
    case "sports":
    echo "Latest sports highlights";
    echo "From your favorite teams";
    break;
    default:
    echo "Welcome to my web site";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <select name="category">
    <option>Select One</option>
    <option value="news">News</option>
    <option value="weather">Weather</option>
    <option value="sports">Sports</option>
    </select>

    <input type="submit" name="Submit" value="SEND">
    </form>
</body>
</html>
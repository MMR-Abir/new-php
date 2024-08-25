<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Delete</title>
</head>
<body>
    <?php 
    
    $find = $_GET['nid'];

    include_once("dbconfig.php");
   // $db->query ("DELETE FROM products WHERE id = '$find'");
   $sql =  "DELETE FROM products WHERE id = '$find'";
   $result= $db->query($sql);

   if($result){
        header("location:all_product.php");
   }
    
    ?>
</body>
</html>
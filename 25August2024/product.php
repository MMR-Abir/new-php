

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// include_once("hakiconfig.php");

//new mysqli("localhost","root","","evendence2024");
 $Haki = new mysqli("localhost","root","","wdpf_60");

$sql = "SELECT * FROM  product_5000";

$Luffy = $Haki->query($sql);



?>
    

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Manufacturer ID</th>
    </tr>

    <?php 
    while($row = $Luffy->fetch_assoc()){ ?>

    <tr>
        <td> <?php echo $row['id'] ?></td>
        <td> <?php echo $row['name'] ?></td>
        <td> <?php echo $row['price'] ?></td>
        <td> <?php echo $row['manufacturer_id'] ?></td>
    </tr>

   <?php } ?>
    
</table>

<a href="manufacturer.php">Manufacture Table</a>
</body>
</html>
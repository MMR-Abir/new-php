<?php $Haki = new mysqli("localhost","root","","wdpf_60"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Manufacturer</h3>

    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $Haki->query("CALL add_manufacturer('$name','$address','$contact')");
    }
    
    
    ?>
    <form action="" method="post">

    <input type="text" name="name" placeholder="Enter Manufacture name"> <br>
    <textarea name="address" placeholder="Write Address"></textarea> <br>
    <input type="text" name="contact"> <br>
    <input type="submit" name="submit" value="SUBMIT">

    </form>
</body>
</html>
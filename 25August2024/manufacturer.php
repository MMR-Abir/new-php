<?php $Haki = new mysqli("localhost","root","","wdpf_60"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 <?php 

 if(isset($_POST['submit'])){
    $nid = $_POST['company'];

    $sql = $Haki->query("DELETE FROM manufacturer WHERE id = '$nid' ") ;

   

    if( $Haki->affected_rows){
        echo "Successfully Deleted";
    }

    
 }

 ?>


    <?php
    // $sql ="SELECT * FROM manufacturer";
    // $zoro = $Haki->query($sql);

    $zoro = $Haki->query("SELECT * FROM manufacturer");
    
    
    ?>

    <form action="" method="post">
        <select name="company" id="">
            <option value="">Select One</option>
            <?php while($row = $zoro->fetch_object()){ ?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                <?php }?>
        </select>

        <input type="submit" name="submit" value="Delete">
    </form>
</body>
</html>
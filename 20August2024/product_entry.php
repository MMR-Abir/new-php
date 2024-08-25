<?php 
include_once("dbconfig.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Product Entry</h3>
    <?php 

        $sql = "SELECT * FROM catagories ";
        $cats = $db->query($sql);


    if(isset($_POST['submit'])){
        extract($_POST);
      $sql=  "INSERT INTO products (ID,Product_Name,product_details,product_price,PRODUCT_QUALITY,Product_Catagories) VALUES(NULL,'$pname','$pdetails','$pnumber','$pquantity','$catagories')";

        

        $result = $db->query($sql);
        //echo $db->affected_rows;

        if($db->error){
            echo "Successfully Added";
        }

        else{
            echo "Failed";
        }
    }
    

     ?>

        

    <form action="" method="post">
        Product Name: <br>
        <input type="text" name="pname" placeholder="Write your product name"> <br>

        Product Details: <br>
        <textarea name="pdetails" placeholder="Write in details about the product"></textarea> <br>

        Product Price: <br>
        <input type="number" name="pnumber" placeholder="Write price"> <br>

        Product Quantity: <br>
        <input type="number" name="pquantity" placeholder="Place your Quantity"> <br>
                

        Catagory: <br>
        <select name="catagories" id="">
            <option value="">Select One</option>

            <?php while($row = $cats->fetch_array()){ ?>

                <option value="<?php echo $row['Cat_ID'] ?>"> <?php echo $row['Cat_Name'] ?></option>
                

                <?php
                 } ?> 
            
        </select> <br><br>

        <input type="submit" name="submit" value="ADD">

        

    </form> <br> <br>

    <a href="all_product.php">Product List</a> <br><br>
</body>
</html>
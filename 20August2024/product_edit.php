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
    <h3>Product Edit</h3>
    <?php 

    $id = $_REQUEST['nid'];
   

       $sql = "SELECT * FROM catagories ";
        $cats = $db->query($sql);


    if(isset($_POST['update'])){
        extract($_POST);

       // echo "UPDATE products SET Product_Name='$pname', product_details='$pdetails',product_price='$pnumber',PRODUCT_QUALITY='$pquantity' WHERE id= $id";

        
      $sql=  "UPDATE products SET Product_Name='$pname', product_details='$pdetails',product_price='$pnumber',PRODUCT_QUALITY='$pquantity',Product_Catagories='$catagory' WHERE id= $id";

        

        $result = $db->query($sql);
        //echo $db->affected_rows;

        if($db->affected_rows){
            echo "Successfully Added";
        }

        else{
            echo "Failed";
        }
    }
    
    $sql = "SELECT * FROM products WHERE id = $id";

    $data = $db->query($sql);

    $row = $data->fetch_object();
    //print_r($row);

     ?>

        

    <form action="" method="post">
        Product Name: <br>
        <input type="text" name="pname" placeholder="Write your product name" value="<?php echo $row->Product_Name; ?>"> <br>

        Product Details: <br>
        <textarea name="pdetails" placeholder="Write in details about the product"><?php echo $row->product_details; ?></textarea> <br>

        Product Price: <br>
        <input type="number" name="pnumber" placeholder="Write price" value="<?php echo $row->product_price; ?>" > <br>

        Product Quantity: <br>
        <input type="number" name="pquantity" placeholder="Place your Quantity" value="<?php echo $row->PRODUCT_QUALITY; ?>"> <br>
        
        
        Product Catagory: <br>
        <select name="catagory" id="">
            <option value="">Select One</option>
            <?php while($Brook = $cats->fetch_assoc()){ ?>

                <option value="<?php echo $Brook['Cat_ID'] ?>" <?php echo $row->Product_Catagories == $Brook['Cat_ID']?"selected":""  ?> ><?php echo $Brook['Cat_Name'] ?></option>

            <?php
            } 
            ?>

        </select>
        
        
        <br>

        <input type="submit" name="update" value="UPDATE">

        <input type="hidden" name="nid" value="<?php echo $id ?>">

    </form> <br> <br>

    <a href="all_product.php">Product List</a> <br><br>
</body>
</html>


<?php 

 include_once("dbconfig.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>
</head>
<body>
    <h3>Product List</h3>
    <?php 
    //$sql = "SELECT * FROM products";
    $sql = "SELECT * FROM products,catagories WHERE products.Product_Catagories = catagories.Cat_ID ";
    $data = $db->query($sql);

    ?>

     <table border ="1">
     <tr>
     <th>ID</th>
     <th>Product Name</th>
     <th>Product Datails</th>
     <th>Product Price</th>
     <th>Product Quality</th>
     <th>Action</th>
     </tr>


    <?php
     while($row = $data->fetch_array()){ ?>
        
        <tr>
            <td><?php echo $row['ID'] ?> </td>
            <td><?php echo $row['Product_Name'] ?> </td>
            <td><?php echo $row['product_details'] ?> </td>
            <td><?php echo $row['product_price'] ?> </td>
            <td><?php echo $row['PRODUCT_QUALITY'] ?> </td>
            <td><?php echo $row['Cat_Name'] ?> </td>
            <td>
                 <a onclick="return confirm('Are you sure to delete')" href="product_delete.php?nid=<?php echo $row['ID'] ?>"><img src="DEL.jpeg" height="20" width="20" alt="" ></a> 
                 
                 
                 |

                 <a href="product_edit.php?nid=<?php echo $row['ID'] ?>"><img src="pencil.jpg" height="20" width="20" alt="" ></a>
        </td>
        </tr>
        


        <?php
    }
 // $row = $data->fetch_array()
    // echo"<pre>";
    // print_r($row);
    ?>
  
    
    
     
</table> <br><br>

<a href="product_entry.php">New Product</a>
</body>
</html>
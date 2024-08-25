<?php 
  include_once "Class_file.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_Upload_Oop.php</title>
</head>
<body>
<?php 
  if(isset($_POST['submit'])){
    $info = $_FILES['file'];

    $obj = new Haki($info);
    $obj->WindBreaker();
  }
?>
    



    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" placeholder="Input your file">
        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

<?php 

if(isset($_POST['submit'])){
// print_r($_POST);
// echo "<hr>" ;
// print_r($_FILES);
$temp = $_FILES['photo'] ['tmp_name'] ;
$filename = $_FILES['photo'] ['name'] ;
$filesize = $_FILES['photo'] ['size'] ;
$filedata = pathinfo($filename);
$file_ext = strtolower($filedata['extension']) ;
$allowed_ext = ["jpeg", "jpg" , "png"]; 
$allowedsize = 307200 ; ;
$path = "photos" . "/" . $filename ;
$errors = [];

if($filesize > $allowedsize){
    $errors[] = "Within 300 KB is Allowed" ;
}

if(!in_array($file_ext ,$allowed_ext)){
    $errors[] = " Allowed file type jpg, png, jpeg" ;
}

if(count($errors) > 0){
    foreach($errors as $err){
        echo $err . "<br>" ;
    }
}

else{
  $status =  move_uploaded_file($temp,$path) ;
  if($status) ;
  echo "Successfully Uploded !" ;
}

}


?>
    <form action="" method="post" enctype="multipart/form-data">
        Name : 
        <input type="text" name="name" id=""> <br>
        Email :
        <input type="text" name="email" id=""> <br>
        <input type="file" name="photo" id=""> <br>
        <input type="submit" name="submit" value="SEND"> <br>

    </form>
</body>
</html>
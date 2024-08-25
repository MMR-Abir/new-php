<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_Upload_Oop</title>
</head>
<body>

   <?php 
    if(isset($_POST['submit'])){
        $Info = $_FILES['file'];

        $Haki = new Shanks($Info);
        $Haki->FilePost();
    }


    class Shanks{
        public $info;

        public function __construct($x){
            $this->info = $x;
        }
        

        function FilePost(){
            $Sub = $this->info;
            $fname = $Sub['name'];
            $ftmp_name = $Sub['tmp_name'];
            $fsize = $Sub['size'];
            $fname = $Sub['name'];

            $Allowsize = 409600;
            $Allowtype = ["jpg","jpeg","docx","pdf"];

            $data =pathinfo($fname);
            $ExtType =strtolower($data["extension"]);

            $Errors = [];

            if($fsize > $Allowsize){
                $Errors[] = "File Size must be within 400 kb";
            }

            if(!in_array($ExtType, $Allowtype)){
                $Errors[] = "File size must be in jpg,jpeg,docx,pdf";
            }

            if(count($Errors) > 0){
                foreach($Errors as $Err){
                    echo "<ul>";
                    echo "<li>$Err</li>";
                    echo "</ul>";
                }
            }

            else{
               
                    if(move_uploaded_file($ftmp_name, "uploded/".$fname)){
                        echo "Validation OK";
                    }
                
            }
        }
    }

   ?>
    <form action="" method="post" enctype="multipart/form-data">
        
        <input type="file" name="file" placeholder="Submit your file"> <br>

        <input type="submit" name="submit" value="UPLOAD">
    </form>
</body>
</html>
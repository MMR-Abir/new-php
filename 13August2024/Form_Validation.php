<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h1>Registration Form</h1>
    <?php 
    if(isset($_REQUEST['submit'])){
        $mSG = Form_Validation();
        if($mSG){
            echo "<ul>";
            foreach($mSG as $M){
                echo "<li>$M</li>";
            }
            echo "</ul>";
        }

        else{
            echo "Validation OK";
        }

       // print_r($mSG);
    }

    function Form_Validation(){
        $Errors = [];
        $Fullname = $_REQUEST['Name'];
        if($Fullname == ""){
            $Errors[] = "Name must be Filled";   
        }

        $District = $_REQUEST['district'];
        if($District == ""){
            $Errors[] = "You  must select a District";   
        }

        $hOBBIES = $_REQUEST['hobbies'];
        if(empty($hOBBIES)){
            $Errors[] = "You  must select one hobby";   
        }

        //return $Errors;
        if(isset($_REQUEST['gender'])){
            $Gender = $_REQUEST['gender'];
           
        }

        else{
            if(empty($Gender)){
                $Errors[] = "Gender must be selected";   
            }
        }
        

        return $Errors;

        

    }
    
    ?>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="Name" placeholder="Write your Name"> <br>
        Gender: <br>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female">Female <br>

        District: <br>
        <select name="district" id="">
            <option value="">Select One</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Khulna">Khulna</option>
            <option value="Barishal">Barishal</option>
            <option value="pABNA">pABNA</option>
        </select> <br>

        Hobbies: <br>
        <input type="checkbox" name="hobbies" value="Cricket">Cricket
        <input type="checkbox" name="hobbies" value="Football">Football
        <input type="checkbox" name="hobbies" value="Badmintont">Badmintont
        <input type="checkbox" name="hobbies" value="Tenis">Tenis <br>

        Address: <br>
        <textarea name="" placeholder="Enter your Address"></textarea> <br>

        <input type="submit" name="submit" value="REGISTER">
    </form>
</body>
</html>
<a href="get_post.php?Name=Masud&Email=www.masud2024@gmail.com&Roll=1282917&Address=Dhaka">Click Here</a> <br>

<?php 
        if(isset($_POST['subscribe'])){
            echo "<pre>";
        // print_r($_GET);
        // print_r($_POST);
        echo "</pre>";

        echo $_POST['email'] ;
        echo "<br>" ;
        echo $_POST['pswd'] ;
        }

        // if(isset($_REQUEST['subscribe'])){
        //     echo "<pre>";
        // // print_r($_GET);
        // // print_r($_POST);
        // echo "</pre>";

        // echo $_REQUEST['email'] ;
        // echo "<br>" ;
        // echo $_REQUEST['pswd'] ;
        // }



?>

<form action="" method="post"> // if we don't mention method , it can claim by default method ="get" 
<p>
Email address:<br>
<input type="text" name="email" size="20" maxlength="50" value="" /> <br>

Password:<br />
<input type="password" name="pswd" size="20" maxlength="15" value="" /> <br> <br>

<input type="submit" name="subscribe" value="subscribe!" />

</form>
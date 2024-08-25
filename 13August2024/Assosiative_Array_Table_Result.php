<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Sheet</title>
</head>
<body>

<?php 

$Haki = ["Akash" =>50,
         "Rafi" =>60,
         "Nahid" =>100,
         "Riyad" =>80,
         "Asfak" =>20,
         "Ajiya" =>110
        ] ;

        




?>
<table border ="1">
    <tr><th>Student name</th><th>Corresponding Score</th>
</tr>


<?php 

foreach($Haki as $name=>$score){ ?>
   
    <tr>
     <td><?php echo $name ?> </td>
     <td><?php echo $score ?></td>
     </tr>

     <?php 
}

?>

    <tr>
        <td colspan="2">
            <?php 
            $maxscore = max($Haki);
            $student =array_search($maxscore, $Haki);
            echo "Maximum Score $maxscore obtained by $student";
            ?>
        </td>
    </tr>














</table>
</body>
</html>

//echo "<tr><td>$name</td><td>$score</td></tr>";

// echo "<tr>";
// echo "<td>$name</td>";
// echo "<td>$score</td>";
// echo "</tr>";
<?php        
// function foo($msg) {            
//    echo "$msg";        
// }        
// $var1 = "foo";        
// $var1("will this work");    
$price = 10; 

$tax = 5; 

$total =50;

function calcSalesTax($price, $tax){
//     $price = 10; 

// $tax = 5; 

// $total =50;

$total = $price + ($price * $tax);
return $total;

}

// echo calcSalesTax($total); 
echo "Total cost: $total";
?>
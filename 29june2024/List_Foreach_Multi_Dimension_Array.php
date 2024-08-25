<?php 

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
foreach ($customers as $customer) {
//  vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $customer);
//  echo "<pre> " ;
//  print_r($customer);

// foreach($customer as $item){
//     $Naruto = explode("," , $item);  We use explode [To make Array from String,If the information is array then use only List methods]
//     list($Name,$Email,$Number) = $Naruto; 

//     echo "$Name $Email $Number" ;

// }
list($Name,$Email,$Number) = $customer;

echo "Name:  $Name Email: $Email Number: $Number <br> ";

}

?>
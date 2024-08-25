<?php 
class Employee{
//    public $name ="Rahim";
   // 
   private $name;
   public $age;  //property
   public $address;
   protected $phone;
   protected $wages;

   public function setname($Nick){
      $this->name = $Nick;
   }

   public function setwage($abir){
      $this->wages = $abir;
   }

   public function info(){
    $Full = "" ;
    $Full.= "Name: " . $this ->name . "<br>" ;
    $Full.= "Age: " . $this ->age . "<br>" ;
    $Full.= "Address: " . $this ->address . "<br>" ;
    $Full.= "Wages: " . $this ->wages ;
    return $Full;
   }
} //End of Class

   

$OBJ =new Employee;
//echo $OBJ -> name; // -> [Hash Rocket]
 //$OBJ -> name ="Rahim" ;
 $OBJ -> setname("Hayata");
 $OBJ -> age =20 ;
 $OBJ -> address ="Dhaka" ;
 $OBJ -> setwage("5000");

echo $OBJ ->info() ;

class Programmer extends Employee{
   public $wages = 10000;
   public function bonus($percent){
      return $this->wages * $percent ;
   }
}

$OBJ1 = new Programmer;
echo "Salary: " . $OBJ1->wages . "<br>";
echo "Bonus: " .  $OBJ1->bonus(.10) ;


?>
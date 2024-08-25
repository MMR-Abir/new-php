<?php
// class oop{
//  public function __construct(){
//      echo "Welcome to PHP World!";
//  }
//  public function sayHello(){
//      echo "Hello World";
//  }
  
 
// }
// $obj=new oop; /* Now Automatically Execute __construct Method
//                   And Will show "Welcome to PHP World " First.*/
 
// echo "<br>";
 
// $obj->sayHello(); // Result: Hello World



class oop{

    private $name;
    private $age;
    public function __construct($name,$age){
        // echo "Welcome to PHP World!";
        $this->name = $name ;
        $this->age = $age ;
    }
    public function sayHello(){
        echo "Hello " . $this->name ;
    }
    
    public function __destruct(){
        echo "<br>I'm about to disappear - bye bye!";
    }
    
   }
   $obj=new oop("mASUD", 20); /* Now Automatically Execute __construct Method
                                                And Will show "Welcome to PHP World " First.*/
    print_r($obj) ;  
    
    $obj->sayHello();
 
?>
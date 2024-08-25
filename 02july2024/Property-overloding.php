<?php 
 class Employee{
    public $name;
    public $phone;

    public function __set($propName, $propValue)
    {
   // echo "Nonexistent variable: \$$propName!";
   $this -> $propName = $propValue;
    }
    }
    $employee = new Employee;
    $employee->name = "Mario";
    $employee->phone = "01971324922";
    echo "Name: {$employee->name}<br/>";
    echo "Phone: {$employee->phone}"
 



?>
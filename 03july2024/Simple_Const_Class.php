<?php
class SimpleClass
{
    public $var = 'a default value<br>'; // public property declaration
    public const a="America<br>"; // private constant Declaration
 
    // public method declaration
    public function displayVar() {
        echo $this->var; //echo dewa ase tai class er bhaire r echo dewa lage nai
    }

    public function displayConst() {
        echo self ::a; 
    }

    public static function displayCons() {
        echo self ::a; 
    }
}

 $obj = new SimpleClass;
 echo $obj->var ;
 echo $obj ::a ;
 $obj ->displayVar() ;
 $obj ->displayConst() ;
 SimpleClass :: displayCons();

?>
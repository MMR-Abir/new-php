<?php 

// class Appliance {
//     private $_power; // Property
//     function setPower($status) {
//         $this->_power = $status;
//  }
// }



// $blender = new Appliance;

// $blender->setPower("On") ;
// var_dump($blender) ;


    class Pond {
        public $Fish ;
        public $Water ;

        function Running($Fish , $Water) {
            $this->Fish = $Fish ;
            $this->Water = $Water ;
        } 
    }

    $Ready = new Pond ;
    $Ready->Running("50000 pcs","50 ltr") ;
    var_dump($Ready);




?>
<?php

class Car {

    static $wheels = 4; // reffering outside with :: (2 colons)
    var $hood = 1;


   function MoveWheels(){

      Car::$wheels = 10;  // calling with :: with classname first

    }


}

$bmw = new Car();

//$bmw->wheels;

Car::MoveWheels();

//echo Car::$wheels;




?>
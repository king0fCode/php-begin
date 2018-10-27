<?php

class Car
{
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function NoOfWheels()
  {
    $this->wheels = 10;
  }

  function Createdoors()
  {
    $this->doors = 6;
  }
}

// class plane have all the properties of car
class Plane extends Car {
  // overise parent class whels value
var $wheels = 20;
}


// check weather class exist or not
if(class_exists('Plane')) {
  echo 'class exist';

} else {
  echo 'class not exist';
}


$bmw = new Car();   // object of a car

$jet = new Plane();
$jet->NoOfWheels();
echo $jet->wheels;



?>
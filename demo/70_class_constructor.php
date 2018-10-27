<?php

class Car
{
      // (execute everytime as default values)
  function __construct() {
      echo $this->wheels = 12;
  }

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function NoOfWheels()
  {
    $this->wheels = 10;
  }



}

$bmw = new Car();   // object of a car
// echo $bmw->wheels;

?>
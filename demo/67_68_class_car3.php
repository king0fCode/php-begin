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

$bmw = new Car();   // object of a car
echo $bmw->wheels;

// change value of property
// $bmw->wheels = 8;


$bmw->NoOfWheels();
echo $bmw->wheels;


$truck = new Car();
echo $truck->wheels = 10;


$truck->Createdoors();
echo $truck->doors;
?>
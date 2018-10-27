<?php

class Car
{
  function MoveWheels()
  {
    echo "Wheels move";
  }
}

$bmw = new Car();   // object of a car
$mercedez_benz = new Car();

$bmw->moveWheels();
$mercedez_benz->moveWheels();

?>
<?php

class Car
{
  public $wheels = 4;
  protected $hood = 1; //only can use inside class , can use use on extends class inside as well
  private $engine = 46; // private can only use inside function
  var $doors = 49;

  function showProperty()
  {
    echo $this->hood;
  }

  function privateProperty() {
      echo $this->engine;
  }


}

class semi extends Car {
     function showProperty()
  {
    echo $this->hood;
  }
}

$bmw = new Car();   // object of a car
// echo $bmw->wheels;
// echo $bmw->showProperty();  // only can use hood inside class
// $semi = new semi();
// echo $semi->showProperty();
echo $bmw->privateProperty();

?>
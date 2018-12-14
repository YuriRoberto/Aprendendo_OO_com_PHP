<?php 

require_once("Car.php");
require_once("Motorcycle.php");

//class People{
//
//   public function getHello($name){
//        return "Hello {$name}!";
//    }
//}

//$p = new People;

//echo $p->getHello("Yuri");

$ferrari = new Car("Ferrari", "Red");

$ferrari->doors = 2;
$ferrari->engine = 488; 

$mustang = new Car;
$mustang->brand = "Mustang";
$mustang->color = "Red";
$mustang->engine = 300;

$m = new Motorcycle;
$m->brand = "Honda";
$m->color = "Blue";
$m->engine = 150;

echo $mustang->getEngine("horsepower");


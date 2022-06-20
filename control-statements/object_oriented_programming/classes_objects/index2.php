<?php
require('./class_object.php');

// Create an object from Automobile class
$automobile = new Automobile;
 
// Attempt to set $automobile object properties
$automobile->fuel = 'Petrol'; // ok
// $automobile->engine = '1500 cc'; // fatal error
// $automobile->transmission = 'Manual'; // fatal error
 
// Create an object from Car class
$car = new Car;
 
// Attempt to set $car object properties
$car->fuel = 'Diesel'; // ok
// $car->engine = '2200 cc'; // fatal error
// $car->transmission = 'Automatic'; // undefined

// Attempt to access static property and method directly
echo HelloClass::$greeting; // Output: Hello World!
HelloClass::sayHello(); // Output: Hello World!
 
// Attempt to access static property and method via object
$hello = new HelloClass;
// echo $hello->greeting; // Strict Warning
$hello->sayHello(); // Output: Hello World!

$iphone = new Mobile();
$samsung = new Mobile();
$nokia = new Mobile();
$huawe = new Mobile();

$iphone->setPrice('$345');
$samsung->setPrice('$585');
$nokia->setPrice('$445');
$huawe->setPrice('$395');

$iphone->setName('iphone 13 pro');
$samsung->setName('Samsung s10');
$nokia->setName('Nokia s20');
$huawe->setName('Huawe y7 pro');

echo $iphone->getName();
echo $samsung->getName();
echo $nokia->getName();
echo $huawe->getName();

echo $iphone->getPrice();
echo $samsung->getPrice();
echo $nokia->getPrice();
echo $huawe->getPrice();
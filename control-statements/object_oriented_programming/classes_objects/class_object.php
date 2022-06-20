<?php
// Class definition
class Automobile
{
    // Declare  properties
    public $fuel;
    protected $engine;
    private $transmission;
}
class Car extends Automobile
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }
}

// Class definition
class HelloClass
{
    // Declare a static property
    public static $greeting = "Hello World!";
    
    // Declare a static method
    public static function sayHello(){
        echo self::$greeting;
    }
}

class Mobile {
    /* Member variables */
    var $price;
    var $title;
    /* Member functions */
    function setPrice($par){
       $this->price = $par;
    }
    function getPrice(){
       echo $this->price ."<br/>";
    }
    function setName($par){
       $this->title = $par;
    }
    function getName(){
       echo $this->title ." <br/>";
    }
 }

 
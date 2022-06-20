<?php

class Transaction
{
    public $amount;
    public $transaction;

    //constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }

    // Destructor
    public function __destruct(){
        echo 'The class "' . __CLASS__ . '" was destroyed!';
    }
}

class Fruit
{
    // Properties
    public $name;
    public $color;


    //Methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

class Rectangle
{
    // Declare  properties
    public $length = 0;
    public $width = 0;
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
    }
}

// Define a new class based on an existing class
class Square extends Rectangle
{   
    // Method to test if the rectangle is also a square
    public function isSquare(){
        if($this->length == $this->width){
            return true; // Square
        } else{
            return false; // Not a square
        }
    }
}

class Autocall{
    public float $amount;
    public string $description;

    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function TaxRate(float $rate) {
        return $this->amount += $this->amount * $rate / 100;
    }
    public function addDiscount(float $rate) {
        return $this->amount += $this->amount * $rate / 100;
    }
}

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$decode = json_decode($jsonobj);

echo "<br />";
echo "<pre>";
var_dump($decode);
echo "</pre>";



$json = '{"a": 1, "b": 2, "c" : 3}';
$json_decode = json_decode($json);
echo "<br />";
echo "<pre>";
var_dump($json_decode->a);
echo "</pre>";

$arr = [
        "a" => 2,
        "b" =>56, 
        "c" => 43, 
        "f" => 98
    ];

echo "<br />";
echo "<pre>";
var_dump($arr);
echo "</pre>";

$arr2 = ["hfg" => 3,"fsdf" => 4,"try" => 6,"ghj" => 8];
$decode_arr = json_encode($arr2);

echo "<br />";
echo "<pre>";
var_dump($decode_arr);
echo "</pre>";

$value = array(
    "name"=>"GFG",
    array(
        "email"=>"abc@gfg.com",
        "mobile"=>"XXXXXXXXXX"
    )
);

$value_encode = json_encode($value);
echo "<br />";
echo "<pre>";
var_dump($value_encode);
echo "</pre>";

$notation_array = ['first_data' => 56, 'second_data' => 76, 'third_data' => 68];
$obj = (Object) $notation_array;

var_dump($obj->{'second_data'});
echo "<pre>";
var_dump((object) 1);
echo "</pre>";

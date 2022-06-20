<?php
// (==) refers to equal same type and value
// (===) refers to equal same instance of class

class Invoice {

    /** 
    * This is a comment section 
    * @param int $rent
    * @ORM\Entity(repositoryClass="MyProject\UserRepository")
    * @var \DateTime[] An array of DateTime objects.
    * @var string[] An array of string objects.
    * @var callable[] An array with callback functions or methods.
    */

    public $rent;
    public $type;

    public function __construct($rent, $type) {
        $this->rent = $rent;
        $this->type = $type;
    }
 
    function __clone() {
        $this->rent = clone $this->rent;
    }
}

$instance1 = new Invoice('45', 'My Invoice 1');
$instance2 = clone $instance1;

echo "<pre>";
var_dump($instance1);
echo "</pre>";
echo "<pre>";
var_dump($instance2);
echo "</pre>";

$instance3 = $instance1;

var_dump($instance1 == $instance2);
echo "<br />";
var_dump($instance1 === $instance2);
echo "<br />";
var_dump($instance1 === $instance3);
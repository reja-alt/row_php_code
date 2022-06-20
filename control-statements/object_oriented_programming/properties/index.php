<?php

class User
{
    public int $id;
    public ?string $name;

    public function __construct(int $id, ?string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$user = new User(1234, "reja");

var_dump($user->id);
echo "<br />";
var_dump($user->name);

class Shape
{
    public int $numberOfSides;
    public string $name;

    public function setNumberOfSides(int $numberOfSides): void
    {
        $this->numberOfSides = $numberOfSides;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNumberOfSides(): int
    {
        return $this->numberOfSides;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$triangle = new Shape();
$triangle->setName("triangle");
$triangle->setNumberofSides(3);
echo "<br />";
var_dump($triangle->getName());
echo "<br />";
var_dump($triangle->getNumberOfSides());

$circle = new Shape();
$circle->setName("circle");
$circle->setNumberOfSides(6);
echo "<br />";
var_dump($circle->getName());
echo "<br />";
var_dump($circle->getNumberOfSides());


class Test {
    public string $prop;
 
    public function __construct(string $prop) {
        // Legal initialization.
        $this->prop = $prop;
    }
 }
 
 $test = new Test("foobar");
 // Legal read.
 var_dump($test->prop); // string(6) "foobar"
 
 // Illegal reassignment. It does not matter that the assigned value is the same.
 $test->prop = "foobar";
 // Error: Cannot modify readonly property Test::$prop

$ref = new StdClass();
$ref->{'type-check'} = 'Journal Article';
var_dump($ref);

class ArrayData
{
    public $var1 = 1;
    protected $var2 = 2;
    private $var3 = 3;
    static $var4 = 4;
   
    public function toArray()
    {
        return (array) $this;
    }
}

$t = new ArrayData;
echo "<pre>";
print_r($t->toArray());
echo "</pre>";

class MyClass
{
    private $foo = FALSE;

    public function __construct()
    {
        $this->foo = TRUE;

        echo($this->foo);
    }
}

$bar = new MyClass();
?>
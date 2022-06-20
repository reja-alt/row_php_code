<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';
    public $date = "today";

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();

$b = new B();
$b->bar();

B::bar();

class Hello {
    public function class_name() {
        return get_class();
    }
}

// $obj = new Hello();
// echo $obj->class_name();
$class_name = Hello::class_name();
echo $class_name;

// Create a class
class GFG {
    public $Geek_name = "Welcome to GeeksforGeeks"; 

    public static $Geek_name_static = "Welcome to GeeksforGeeks"; 
      
    public function Geeks() {
        var_dump(get_called_class());
    }
}
  
$obj_test = new GFG();

echo $obj_test->Geeks();

GFG::Geeks();

$page=new stdClass();
$page->name='Home';
$page->status=1;

// echo "<pre>";
// var_dump($page);
// echo "</pre>";

class PageShow {

    public $currentpage;

    public function __construct($pageobj)
    {
        $this->currentpage = $pageobj;
    }

    public function show()
    {
        echo $this->currentpage->name;
        $state = ($this->currentpage->status == 1) ? 'Active' : 'Inactive';
        echo 'This is ' . $state . ' page';
    }
}

$pageview=new PageShow($page);

echo "<pre>";
var_dump($pageview->currentpage);
echo "</pre>";
echo "<br />";

$pageview->show();

$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
echo "<br />";
var_dump($reference);
echo "<br />";
var_dump($assigned);

class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();

echo "<pre>";
var_dump($obj1);
echo "</pre>";

$obj2 = new $obj1;

echo "<pre>";
var_dump($obj2);
echo "</pre>";

var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();

echo "<pre>";
var_dump($obj3);
echo "</pre>";

var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);

echo (new DateTime())->format('Y');

class Foo
{
    public $bar = 'property';
    public $food = 'buna khichuri';
    public $drinks = 'borhani';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();

echo $obj->food, PHP_EOL, $obj->bar, PHP_EOL, $obj->drinks;
echo "<br />";
echo $obj->bar . PHP_EOL . $obj->bar() . PHP_EOL;

class Food
{
    public $bar;
    
    public function __construct() {
        $this->bar = fn() => 78;
    }
}
$foo = new Food();
echo ($foo->bar) ();

class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    final function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();

echo "<pre>";
var_dump($extended->displayVar());
echo "</pre>";
?>
<?php

/* List of Magic Methods in PHP

__construct()
__destruct()
__call($fun, $arg)
__callStatic($fun, $arg)
__get($property)
__set($property, $value)
__isset($content)
__unset($content)
__sleep()
__wakeup()
__toString()
__invoke()
__set_state($array)
__clone()
__debugInfo() */

echo "The line number is : " .  __line__ . "<br />";
echo "The file is : " .  __file__ . "<br />";
echo "The directory is : " .  __dir__ . "<br />";

function Geeks(){
    echo "The function name is : ". __function__;
}
Geeks();

class Magic {
    public function __get($name) {
       var_dump($name);
    }
    public function __set($name, $value) {
        var_dump($name, $value);
     }
}

$object = new Magic();
$object->amount = 67;
echo $object->amount;

class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass("oiuy");
echo $class . "<br />";

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new CallableClass();
$obj('test');
var_dump(is_callable($obj));
echo "<br />";


class A
{
    public $var1;
    public $var2;

    public static function __set_state($an_array)
    {
        $obj = new A;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}

$a = new A;
$a->var1 = 5;
$a->var2 = 'foo';
var_dump($a);
echo "<br />";

$b = var_export($a, true);
var_dump($b);
eval('$c = ' . $b . ';');
var_dump($c);
echo "<br />";

class sample
{
    function user_def()
    {
        echo "user defined constructor";
    }
    function __construct()
    {
        echo "predefined constructor";
    }
}

$obj= new sample();

class sample1 { 
    function __construct() { echo "Constructor initialised"." "; } 
    function user_def() { echo "User defined function "." "; } 
    function __destruct() { echo "after user definition, object gets destroyed automatically"." "; }
 } 
 $obj= new sample1();
 echo "<br />"; 
 $obj->user_def();
//check object is destroyed or not
echo is_object($obj)."
";

?>
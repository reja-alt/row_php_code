<?php
$foo = 25;
$bar = &$foo;
$test_demo = "Demo is here";
$refer_value = &$test_demo;
echo $refer_value . "<br>";
echo $bar;      // This is a valid assignment.
// $bar = &(24 * 7);  // Invalid; references an unnamed expression.

function test()
{
   return 25;
}

// $bar = &test(); //Invalid

//

var_dump($unset_var);
echo($unset_bool ? "true\n" : "false\n");

$unset_str = 'abc';
var_dump($unset_str);

// Integer usage; outputs 'int(25)'
$unset_int = 25; // 0 + 25 => 25
var_dump($unset_int);

$unset_arr[3] = "def"; // array() + array(3 => "def") => array(3 => "def")
echo "<pre>";
var_dump($unset_arr);
echo "</pre>";


// $unset_obj->foo = 'bar';
// var_dump($unset_obj);

//


empty($vessel);

$item = array();
print empty($item);
$item['unicorn'] = '';
echo "<pre>";
var_dump($item);
echo "</pre>";
print empty($item);

$_GET['avar'] = 'b';
print_r($_GET['avar']); print('<br>');
print_r($_REQUEST);

// echo $_GET["secret_access"]; // output: true
// echo $secret_access;

//

$a = 1; /* global scope */ 

function testDemo()
{ 
    global $a;
    echo $a . "<br>"; /* reference to local scope variable */ 
} 

testDemo();

//

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
} 

Sum();
echo $b;


//

class Foo {
    public function bar() {
        static $anonymous = null;
        if ($anonymous === null) {
            // Expression is not allowed as static initializer workaround
            $anonymous = function (self $thisObj) {
                return $thisObj;
            };
        }
        return $anonymous($this);
    }
}

$a = new Foo();
$b = new Foo();
echo "<pre>";
var_dump($a->bar() === $a); // True
var_dump($b->bar() === $a); // False
echo "</pre>";
?>
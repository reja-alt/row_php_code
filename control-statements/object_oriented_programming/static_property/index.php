<?php

class Trump {
    public static int $count = 0;

    public function __construct () {
        var_dump(self::$count++);
    }
} 

$obj = new Trump();


class Foo
{
    public static $my_static = 'foo';
    public static $my_static2 = 'boo';

    public static function staticValue() {
        return self::$my_static2;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "\n";
print Foo::staticValue() . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
print $foo::$my_static . "\n";      // Undefined "Property" my_static 

print $foo::$my_static . "\n";
$classname = 'Foo';
print $classname::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->staticValue() . "\n";


class a {

    static protected $test="class a";
    
    public function static_test(){
    
    echo static::$test; // Results class b
    echo self::$test; // Results class a
    
    }
    
    }
    
    class b extends a{
    
    static protected $test="class b";
    
    }
    
    $obj = new b();
    $obj->static_test();


    class Shopinson {
        const MY_CONSTANT = 'the value of MY_CONSTANT ';
    }
    
    class Godwin extends Shopinson
    {
        public static $myconstant = ' The Paamayim Nekudotayim or double-colon.';
        public function SaySomething(){
            echo "<br />";
            echo parent::MY_CONSTANT .PHP_EOL; // outputs: the value of MY_CONSTANT
            echo self::$myconstant . "<br />"; // outputs: The Paamayim Nekudotayim or double-colon.
        }
    }
    
    $my_class = new Godwin();
    print $my_class::$myconstant . "<br />";
    $my_class::SaySomething();
    echo Godwin::$myconstant . "<br />";
    echo "<br />";
    Godwin::SaySomething();
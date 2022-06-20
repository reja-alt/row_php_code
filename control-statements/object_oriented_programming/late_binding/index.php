<?php
//early binding and late binding

class A {
    public static $value = 'A';

    public static function getData() {
        return static::$value;
        // return $this->value;
    }

    // public static function make() {
    //     return new static();
    // }
}

class B extends A {
    public static $value = 'B';
}

$objectA = new A();
$objectB = new B();

echo $objectA->getData() . "<br />";
echo $objectB->getData();

// echo A::getData() . "<br />";
// echo B::getData();

// var_dump(A::make());
// var_dump(B::make());
<?php
 trait T {
    public $prop = null;

    public function test($prop) {
        echo "Constructor called\n";
        $this->prop = $prop;
    }

    public function destructor() {
        echo "Destructor called\n";
    }
}

class A {
   use T;
//    {
//        T::test as __construct;
//     //    T::destructor as __destruct;
//    }
}

$a = new A('teat'); // Constructor called
$a->test('test');
echo $a->prop; // Hello World

// Destructor called 
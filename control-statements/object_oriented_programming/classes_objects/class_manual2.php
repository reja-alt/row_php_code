<?php

class Base
{
    public function foo(int $a) {
        echo $a . PHP_EOL;
        echo "Valid" . PHP_EOL;
    }
}

class Extend1 extends Base
{
    function foo(int $a = 5)
    {
        parent::foo($a);
    }
}

class Extend2 extends Base
{
    function foo(int $a = 3, $b = 5)
    {
        parent::foo($a);
    }
}

class Extend extends Base
{
    function foo(int $a = 9)
    {
        parent::foo(1);
    }
}

$extended1 = new Extend1();
$extended1->foo(7);
$extended2 = new Extend2();
$extended2->foo();
$extended = new Extend();
$extended->foo();


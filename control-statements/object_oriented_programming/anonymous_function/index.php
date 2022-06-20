<?php

$obj = new class {
    public $test = 'demo';
    public function check() {
        echo 'something write' . "<br />";
    }
};

$obj->check();
 
class Food {
    public function item() {
        echo "List of food" . "<br />";
    }
}

trait test1 {
    public function fan() {
        echo "List of traits" . "<br />";
    }
}

interface test2 {
    public function item();
}

$objectItem = new class extends Food implements test2 {
    use test1;
    public function item() {
        echo 'something different' . "<br />";
    }
};

$objectItem->item();
$objectItem->fan();

 
class Outer
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1()
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Outer {
            private $prop3;

            public function __construct($prop)
            {
                $this->prop3 = $prop;
            }

            public function func3()
            {
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

echo (new Outer)->func2()->func3();
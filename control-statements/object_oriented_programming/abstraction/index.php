<?php

class Purchase {
    private float $amount;

    public function __construct ($amount) {
        $this->amount = $amount;
    }

    public function getAmount () {
        return $this->amount;
    }

    public function setAmount (float $amount) {
        $this->amount = $amount;
    }

    public function processing() {
        echo 'processing $' . $this->amount;
    }
}

$obj = new Purchase(123);
// $obj->amount;
// $obj->setAmount(87);
// $obj->processing();

$reflectionProperty = new ReflectionProperty(Purchase::class, 'amount');
$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($obj, 67);
var_dump($reflectionProperty->getValue($obj));


abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";

//


abstract class genderCheck {
    abstract protected function gender($name);
}

class genderCheck1 extends genderCheck {
    public function gender($name, $seperator = '.') {
        if($name == 'nirjor') {
            $prefix = 'Mr';
        } elseif ($name == 'otoshi') {
            $prefix = 'Mrs';
        } else {
            return 'Default';
        }
        return "{$prefix}{$seperator} {$name}";
    }
}

$object = new genderCheck1();
echo $object->gender('nirjor');


Abstract class SuperClass{
    public abstract function test();
    protected function welcome(){
       echo "Good morning";
    }
 }
 class ClassA extends SuperClass{
    public function test(){
       echo "Hello";
    }
    protected function welcome(){
       echo "Good afternoon";
    }
 }
 class ClassB extends SuperClass{
    public function test(){
       echo "Hello";
    }
    protected function welcome(){
       echo "Good evening";
    }
 }

 
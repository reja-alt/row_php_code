<?php
abstract class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    abstract public function intro();
}

class Strawberry extends Fruit {
    public $weight;

    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();

// Class Geeks
class Geeks {
    public function sayhello() {
       echo "Hello";
    }
}
    
// Trait forGeeks
trait forGeeks {
    public function sayfor() {
        echo " Geeks";
    }
}

trait forAge {
    public function getAge() {
        echo "Age";
    }
}
    
//intrface
interface Classy {
    public function test();
}

class Sample extends Geeks implements Classy {
use forGeeks, forAge;
    
public function geeksforgeeks() {
    echo "\nGeeksforGeeks";
} 

public function test() {
    echo "Interface Access";
}
}
    
  $test = new Sample();
  $test->sayhello();
  $test->sayfor();
  $test->getAge();
  $test->test();
  $test->geeksforgeeks();

  
?>

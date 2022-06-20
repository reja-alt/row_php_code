<?php

//
// A sample trait in PHP
trait namethis {
    function ReturnType() {  }
    function ReturnDescription() {  }
}

// PHP program to demonstrate working
// of trait.
// trait HelloGeeks {
//     public function geeks1() {
//         echo 'Hello World!';
//     }
// }
  
// class Geeksforgeeks {
//     use HelloGeeks;
//     public function geeks() {
//         echo 'Hello Geeks!';
//     }
// }

// $obj = new Geeksforgeeks();
// $obj->geeks1();


class Base {
    use SayWorld;
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

trait SayWorld1 {
    public function sayHello() {
        echo 'SayWorld 1!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new Base();
$o->sayHello();


trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();


trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}


trait PropertiesTrait {
    public $same = true;
    public $different = false;
}

class PropertiesExample {
    use PropertiesTrait;
    public $same = false;
    public $different = true; // Fatal error
}

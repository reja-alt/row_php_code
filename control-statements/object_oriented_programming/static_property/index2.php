<?php

declare(strict_types=1);

class staticparent {
    static    $parent_only;
    static    $both_distinct;
   
    function __construct() {
        self::$parent_only = 'fromparent';
        self::$both_distinct = 'fromparent';
    }
}

class staticchild extends staticparent {
    static    $child_only;
    static    $both_distinct;
   
    function __construct() {
        self::$parent_only = 'fromchild';
        self::$both_distinct = 'fromchild';
        self::$child_only = 'fromchild';
    }
}

$a = new staticparent();
$a = new staticchild();

echo 'Parent: parent_only=', staticparent::$parent_only, ', both_distinct=', staticparent::$both_distinct, "<br/>\r\n";
echo 'Child:  parent_only=', staticchild::$parent_only, ', both_distinct=', staticchild::$both_distinct, ', child_only=', staticchild::$child_only, "<br/>\r\n";


class MyParent {
   
    protected static $variable;
}

class Child1 extends MyParent {
    protected static $variable;
    function set() {
       
        self::$variable = 2;
    }
}

class Child2 extends Child1 {
    protected static $variable = 9;
    function show() {
       
        echo(parent::$variable);
    }
}

$obj = new Child1();
$obj->set();
$obj2 = new Child2();
$obj2->show();


class MySingleton
  {
    private static $instance = null;
    public $name;

    private function __construct()
    {
      $this-> name = 'Freddy';

    }

    public static function getInstance()
    {
      if(self::$instance == null)
      {
        print "Object created!<br>";
        self::$instance = new self;

      }

      return self::$instance;

    }

    public function sayHello()
    {
      print "Hello my name is {$this-> name}!<br>";

    }

    public function setName($name)
    {
      $this-> name = $name;

    }

  }

  //

  $objA = MySingleton::getInstance(); // Object created!

  $objA-> sayHello(); // Hello my name is Freddy!

  $objA-> setName("Alex");

  $objA-> sayHello(); // Hello my name is Alex!

  $objB = MySingleton::getInstance();

  $objB-> sayHello(); // Hello my name is Alex!

  $objB-> setName("Bob");

  $objA-> sayHello(); // Hello my name is Bob!


  function Demonstration()
{
    return 'This is the result of demonstration()';
}

class MyStaticClass
{
    //public static $MyStaticVar = Demonstration(); //!!! FAILS: syntax error
    public static $MyStaticVar = null;

    public static function MyStaticInit()
    {
        //this is the static constructor
        //because in a function, everything is allowed, including initializing using other functions
       
        self::$MyStaticVar = Demonstration();
    }
} MyStaticClass::MyStaticInit(); //Call the static constructor

echo MyStaticClass::$MyStaticVar;
//This is the result of demonstration()
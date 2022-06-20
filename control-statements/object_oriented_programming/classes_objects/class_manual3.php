<?php

class a {

    public static $foo = 'I am foo';
    public $bar = 'I am bar';
   
    public static function getFoo() { echo self::$foo . "<br />";    }
    public static function setFoo() { self::$foo = 'I am a new foo' . "<br />"; }
    public function getBar() { echo $this->bar . "<br />";}           
}

$ob = new a();
a::getFoo();     // output: I am foo   
$ob->getFoo();    // output: I am foo
//a::getBar();     // fatal error: using $this not in object context
$ob->getBar();    // output: I am bar
                // If you keep $bar non static this will work
                // but if bar was static, then var_dump($this->bar) will output null

// unset($ob);
a::setFoo();    // The same effect as if you called $ob->setFoo(); because $foo is static
$ob = new a();     // This will have no effects on $foo
$ob->getFoo();    // output: I am a new foo


class Toop {
    public $i = "1234";
    public function setv($a) {
        $this->i = $a;
    }
    public function returnthis() {
        return $this;
    }
}
$ob = new toop();
$ob1 = new toop();
$obthis = $ob->returnthis();
echo $ob->i."\n" . "<br />";
$ob->setv("\$ob set");
echo $ob->i."\n" . "<br />";
$obthis->setv("\$obthis set");
echo $ob->i."\n" . "<br />";
$ob1->setv('$ob1 set');
echo $ob->i."\n" . "<br />";
?>
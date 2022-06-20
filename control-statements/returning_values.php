<?php
    declare(strict_types = 1);
    function result($var1, $var2){
        $r1=$var1+$var2;
        $r2=$var1-$var2;
        $r3=$var1*$var2;
        $r4=$var1/$var2;
        return array("add"=>$r1,"sub"=>$r2,"multiply"=>$r3,"division"=>$r4);
    }
    $x=10;
    $y=20;
    $arr=result($x,$y);
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
    foreach ($arr as $k=>$v){
    echo "<pre>";
    echo $k . "->" . $v . "\n";
    echo "</pre>";
    }

    //

    function &myfunction(){
        static $arr=[1,2,3,4,5];
        echo "array elements: ";
        foreach ($arr as $i){
           echo "$i ";
        }
        echo "\n";
        return $arr[2];
    }
    $var=&myfunction();
    echo "returned by reference : $var\n";
    $var=100;
    $var=&myfunction();
    $var1=10;
    $var2=&$var1;
    echo "$var1 $var2\n";
    $var2=20;
    echo "$var1 $var2\n";

    //

    # (1) Objects are always passed by reference and returned by reference

    // class Obj {
    //     public $x;
    // }

    // function obj_inc_x($obj) {
    //     $obj->x++;
    //     return $obj;
    // }

    // $obj = new Obj();
    // $obj->x = 1;
    // // echo "<pre>";
    // // print($obj->x);
    // // echo "<pre>";

    // $obj2 = obj_inc_x($obj);
    // // echo "<pre>";
    // // print($obj2->x);
    // // echo "<pre>";
    // echo "<pre>";
    // var_dump(obj_inc_x($obj2));
    // echo "</pre>";
    // // print $obj->x . ', ' . $obj2->x . "\n";

    // //

    
    // # (2) Scalars are not passed by reference or returned as such

    // function scalar_inc_x($x) {
    //     $x++;
    //     return $x;
    // }

    // $x = 1;

    // $x2 = scalar_inc_x($x);
    // scalar_inc_x($x2);

    // print $x . ', ' . $x2 . "\n";

    // # (3) You have to force pass by reference and return by reference on scalars

    // function &scalar_ref_inc_x(&$x) {
    //     $x++;
    //     return $x;
    // }

    // $x = 1;

    // $x2 =& scalar_ref_inc_x($x);   # Need reference here as well as the function sig    //2
    // scalar_ref_inc_x($x2);         //3

    // print $x . ', ' . $x2 . "\n";


    # (4) Arrays use pass by value sematics just like scalars

    // function array_inc_x($array) {
    //     $array{'x'}++;
    //     return $array;
    // }

    // $array = array();
    // $array['x'] = 1;

    // $array2 = array_inc_x($array);
    // echo "<pre>";
    // var_dump(array_inc_x($array2));
    // echo "</pre>";
    // array_inc_x($array2);

    // print $array['x'] . ', ' . $array2['x'] .  "<br \>";

    // # (5) You have to force pass by reference and return by reference on arrays

    // function &array_ref_inc_x(&$array) {
    //     $array{'x'}++;
    //     return $array;
    // }

    // $array = array();
    // $array['x'] = 1;

    // $array2 =& array_ref_inc_x($array); # Need reference here as well as the function sig
    // // echo "<pre>";
    // // var_dump($array2);
    // // echo "</pre>";
    // array_ref_inc_x($array2);
    // echo "<pre>";
    // var_dump($array2);
    // echo "</pre>";
    // $array3 = & array_ref_inc_x($array2);
    // echo "<pre>";
    // var_dump(array_inc_x($array3));
    // echo "</pre>";

    // print $array['x'] . ', ' . $array2['x'] . "<br \>";

    // //

    // function myfunc1() {
    //     return('thingy' or die('otherthingy'));
    // }
    // function myfunc2() {
    //     return 'thingy' or die('otherthingy');
    // }
    // function myfunc3() {
    //     return('thingy') or die('otherthingy');
    // }
    // function myfunc4() {
    //     return 'thingy' or 'otherthingy';
    // }
    // function myfunc5() {
    //     $x = 'thingy' or 'otherthingy'; return $x;
    // }
    // echo myfunc1(). "\n". myfunc2(). "\n". myfunc3(). "\n". myfunc4(). "\n". myfunc5(). "\n";
    //
    class A {
        public function f (int $a)
        {
            return $a;
        }
        public function fa ($a)
        {
            return $a;
        }
    }
    
    class B extends A {
        public function f (int $a)  // + return type, OK
        {
            return $a;
        }
        public function fb ($a): int // + return type, OK
        {
            return $a;
        }
    }
    
    class C extends A{
        public function f (int $a) // + argument type, WARNING
        {
            return $a;
        }
        public function fc (string $a) // + argument type, WARNING
        {
            return $a;
        }
    }
    $objA = new C;
    echo $objA->f(9) . "<br>";
    echo $objA->fa("value inside a access") . "<br>";
    // echo $objA->fb("value inside b access");
    echo $objA->fc("value inside c access");
?>
<?php
    $y = 1;
 
    $fn1 = fn($x) => $x + $y;
    // equivalent to using $y by value:
    $fn2 = function ($x) use ($y) {
        return $x + $y;
    };

    var_export($fn1(3));

    //

    $z = 1;
    $nestedFunction = fn($x) => fn($y) => $x * $y + $z;

    print_r($nestedFunction(5) (6));

    fn(array $x) => $x;
    static fn(): int => $x;
    fn($x = 42) => $x;
    fn(&$x) => $x;
    fn&($x) => $x;
    fn($x, ...$rest) => $rest;

    $array = [1,3,5,68,54];

    $data = array_map(function($element) {
        return $element * 2;
    }, $array);

    $x = function($element) {
        return $element * 2;
    };

    $arrow = fn($element) => $element * 2;

    function demo($element) {
        return $element * 2;
    }
    $data1 = array_map($x, $array);
    $data2 = array_map('demo', $array);
    $data3 = array_map($arrow , $array);

    echo "<pre>";
    echo "Data of Array" . "<br />";
    var_dump($array);
    echo "</pre>";

    echo "<pre>";
    echo "Data of Data" . "<br />";
    var_dump($data);
    echo "</pre>";

    echo "<pre>";
    echo "Data of Data1" . "<br />";
    var_dump($data1);
    echo "</pre>";

    echo "<pre>";
    echo "Data of Data2" . "<br />";
    var_dump($data2);
    echo "</pre>";

    echo "<pre>";
    echo "Data of Data3" . "<br />";
    var_dump($data3);
    echo "</pre>";
?>

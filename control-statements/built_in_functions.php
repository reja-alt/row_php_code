<?php
    if(function_exists('foo')) {
        echo "true";
    }
    else {
        echo "false";
    }
    function foo() {};

    $array = array(0=> 3, 1 => 32,2 => 7, 3 => 4, 4 => 10);
    $chunk = array_chunk($array, 2);
    // echo "<pre>";
    // var_dump($array);
    // echo "</pre>";
    // echo "<pre>";
    // var_dump($chunk);
    // echo "</pre>";

    
    $array1 = array('a', 'b', 'c', 'd', 'e', 'f');
    $array2 = array('a', 'b', 'g', 'h');
    $array3 = array('a', 'f', 'i', 'c');
    $array_find = array_diff($array1, $array2, $array3); 
    echo "<pre>";
    var_dump($array_find);
    echo "</pre>";
    

    $a1 = array_fill(0 ,6, "blue");
    echo "<pre>";
    var_dump($a1);
    echo "</pre>";

?>
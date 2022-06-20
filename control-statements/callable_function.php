<?php

function activeClass() {
    echo "Demo test is here" . "<br />";
}

call_user_func("activeClass");

//

class Brand {
    static function samsung() {
        echo "Samsung is the world popular brand" . "<br />";
    }
}

class Iphone extends Brand{
    static function accesories() {
        echo "Airpod, bluthooth" . "<br />";
    }

    function __invoke() {
        echo "invoke method called" . "<br />";
    }
}

$obj = new Iphone;
call_user_func(array('Iphone', 'samsung'));
call_user_func(array($obj, 'accesories'));
call_user_func($obj);

call_user_func(array('Brand', 'samsung'));
// call_user_func(array('Iphone::accesories'));
// call_user_func(array('Brand', 'parent:samsung'));

 
$element = function($value) {
    echo $value . "<br />";
};

$item = array('Dhaka','Rajshahi', 'Comilla', 'Chittagong');
array_map($element, $item);
?>
<?php

spl_autoload_register( function ($class) {
    var_dump('Autoloader1');
});

spl_autoload_register( function ($class) {
    var_dump('Autoloader2');
});


$obj = new Myvar();
var_dump($obj);
<?php

require __DIR__ . '\vendor\autoload.php';

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->Uuid4();

$obj = new Transition();
var_dump($obj);
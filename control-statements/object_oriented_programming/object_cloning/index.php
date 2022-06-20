<?php

/**
 * Creating class
 */
class Demo {
    /**
     * @param $name return name as string
     * @return $name Name 
     */
    private string $id;
    // public function test(string $name): string {
    //     return $this->name;
    // }

    public function __construct() {
        $this->id = uniqid('invoice_');
        var_dump('constructor called');
    }

    public function __clone() {
        $this->id = uniqid('invoice_');
        var_dump('clone method');
    }
}

/**
 * Creating object
 */
$obj = new Demo();

/**
 * Clone object
 */
$obj2 = clone $obj;

echo "<pre>";
var_dump($obj, $obj2, $obj === $obj2);
echo "</pre>";
<?php

require 'config.php';

$dsn = "mysql:host=$localhost;dbname=$db;charset=UTF8";
try {
    $dbh = new PDO($dsn, $username, $password, array(
        PDO::ATTR_PERSISTENT => true
    ));
    $data = $dbh->query('SELECT * from employees')->fetchAll(PDO::FETCH_ASSOC);
    // fruits = [0 = > 'mango', 1 => 'apple', 2 => 'banana'];
    // echo "<pre>";
    // var_dump($data->fetchAll());
    // echo "</pre>";
    foreach($data as $row) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
    $data  = null;
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
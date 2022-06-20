<?php
class Transaction {
    private float $amount = 1;

    public function __construct(float $amount, string $description = null) {
        echo $amount;
        echo $description;
    }
}

$obj = new Transaction(3, 'ghfd');

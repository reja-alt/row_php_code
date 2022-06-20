<?php

require './class_constants.php';

use App\Payment\Transaction;

$obj = new Transaction();

// echo $obj::STATUS_PAID . "<br />";
echo $obj::PENDING . "<br />";
echo Transaction::DECLINE . "<br />";
echo Transaction::class;

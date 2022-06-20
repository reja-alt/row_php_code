<?php

namespace App\Payment;

class Transaction {
    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINE = 'decline';

        function __construct() {
        var_dump(Transaction::STATUS_PAID);
    }
}

  




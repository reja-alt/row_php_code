<?php

class SpecificException extends Exception {}

function test() {
    throw new SpecificException('Oopsie');
}

try {
    test();
} catch (SpecificException $e) {
    print "A SpecificException was thrown, but we don't care about the details.";
}


class InvoiceCheck {
    public function getAmount(float $amount): float {
        if($amount <= 1) {
            throw new Exception('Invalid');
        }
        return $amount;
    }
}

$transaction = new InvoiceCheck();
echo $transaction->getAmount(0);
<?php
    //  references : https://www.php.net/manual/en/function.number-format.php
    //  https://www.geeksforgeeks.org/php-number_format-function/
    
    $number = 7584.39606;

    echo number_format($number) . "<br />";
    echo number_format($number, 2) . "<br/>";
    echo number_format($number, 2, '.', ',');
?>
<?php
    $var = function ($x) {
        return pow($x,3);
    };

    echo "cube of 3 = " . $var(3) . "<br />";

    $add = function ($a, $b) {
        return $a + $b;
    };

    echo "Addition: " . $add(34, 65);

    $maxmarks = 300;
    $percent = function ($marks) use ($maxmarks) {
        return $marks * 100 / $maxmarks;
    };

    echo "marks=285 percentage=". $percent(285);

    $numbers = [23, 45, 65, 43, 90, 40, 74, 25];

    $multiple_five = array_filter($numbers, fn($n) => $n % 5 == 0);
    echo "<pre>";
    var_dump($multiple_five);
    echo "</pre>";

    //

    $value = function($word) { 
        echo strlen($word) . "<br />"; 
    };

    $value("demo of length");

    $array_element = [
        'first' => function($word) { echo strtoupper($word); },
        'second' => function($word) { echo strrev($word); },
        'third' => function($word) { echo strtolower($word); },
    ];

    $array_element['second']("banana");

    //

    $numbers1 = [12, 18, 5, 11, 10, 95, 3];
 
    $factors = [2, 3, 5];

    foreach($factors as $factor) {
        $multiply = array_filter($numbers1, fn($n) => $n % $factor == 0);
        echo "<pre>";
        echo "Multiples of $factor\n";
        print_r($multiply);
        echo "</pre>";
    }

    //

    $message = 'hello';

    // No "use"
    $example = function ($message) {
        echo "<pre>";
        var_dump($message);
        echo "</pre>";
    };
    $example("demo text");

    // Inherit $message
    $example = function () use ($message) {
        echo "<pre>";
        var_dump($message);
        echo "</pre>";
    };
    $example();

    // Inherited variable's value is from when the function
    // is defined, not when called
    $message = 'world';
    $example();

    // // Reset message
    $message = 'hello1';

    // // Inherit by-reference
    $example = function () use (&$message) {
        echo "<pre>";
        var_dump($message);
        echo "</pre>";
    };
    $example();

    // // The changed value in the parent scope
    // // is reflected inside the function call
    $message = 'world';
    $message = 'world copy';
    $example();

    // // Closures can also accept regular arguments
    $example = function ($arg) use ($message) {
        echo "<pre>";
        var_dump($arg . ' ' . $message);
        echo "</pre>";
    };
    $example("hello");

    // // Return type declaration comes after the use clause
    $example = function () use ($message): string {
        echo "<pre>";
        return "hello $message";
        echo "</pre>";
    };
    var_dump($example());


// A basic shopping cart which contains a list of added products
// and the quantity of each product. Includes a method which
// calculates the total price of the items in the cart using a
// closure as a callback.
class Cart
{
    const PRICE_BUTTER  = 1.00;
    const PRICE_MILK    = 3.00;
    const PRICE_EGGS    = 6.95;

    protected $products = array();
    
    public function add($product, $quantity)
    {
        $this->products[$product] = $quantity;
    }
    
    public function getQuantity($product)
    {
        return isset($this->products[$product]) ? $this->products[$product] :
               FALSE;
    }
    
    public function getTotal($tax)
    {
        $total = 0.00;
        
        $callback =
            function ($quantity, $product) use ($tax, &$total)
            {
                $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                    strtoupper($product));
                $total += ($pricePerItem * $quantity) * ($tax + 1.0);
            };
        
        array_walk($this->products, $callback);
        return round($total, 2);
    }
}

$my_cart = new Cart;

// echo "<pre>";
// var_dump($my_cart);
// echo "</pre>";

// Add some items to the cart
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);

// Print the total with a 5% sales tax.
print $my_cart->getTotal(0.05) . "\n";
// The result is 54.29


class Test
{
    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}

$object = new Test;
$function = $object->testing();
$function();

//

$result = 0;

$one = function()
{ var_dump($result); };

$two = function() use ($result)
{ var_dump($result); };

$three = function() use (&$result)
{ var_dump($result); };

$result++;

$one();    // outputs NULL: $result is not in scope
$two();    // outputs int(0): $result was copied
$three();    // outputs int(1)


//set up variable in advance
$myInstance = null;

$broken = function() use ($myInstance)
{
    if(!empty($myInstance)) $myInstance->doSomething();
};

$working = function() use (&$myInstance)
{
    if(!empty($myInstance)) $myInstance->doSomething();
}

//$myInstance might be instantiated, might not be
// if(SomeBusinessLogic::worked() == true)
// {
//     $myInstance = new myClass();
// }

// $broken();    // will never do anything: $myInstance will ALWAYS be null inside this closure.
// $working();    // will call doSomething if $myInstance is instantiated
?>
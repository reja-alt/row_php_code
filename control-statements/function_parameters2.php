<?php
    // function makecoffee($types = array("cappuccino", "coffee"), $coffeeMaker = NULL)
    // {
    //     $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    //     return "Making a cup of ".join(", ", $types)." with $device.\n";
    // }
    // echo makecoffee();
    // // echo makecoffee(array("cappuccino", "lavazza"), "teapot");

    // function burger($type = array("cheese", "meyonrze", "spicy"), $drinks = null) {
    //     $help = is_null($drinks) ? "dry" : $drinks;
    //     return "Give me $help";
    // }
    // echo burger("", "dew");

    //Two Step

//     class DefaultCoffeeMaker {
//         public function brew() {
//             return 'Making coffee.';
//         }
//     }
//     class FancyCoffeeMaker {
//         public function brew() {
//             return 'Crafting a beautiful coffee just for you.';
//         }
//     }
    
//     function makecoffee($type) {
//         return $type->brew();
//     }
//     echo makecoffee(new DefaultCoffeeMaker);

//     //step three
//     function makeyogurt($container = "bowl", $flavour)
//     {
//         return "Making a $container of $flavour yogurt.\n";
//     }
//     echo makeyogurt("raspberry", "value");

//     //step four
//     function makeyogur2t($container = "bowl", $flavour = "raspberry", $style = "Greek")
//     {
//         return "Making a $container of $flavour $style yogurt.\n";
//     }
    
//    function sum(...$numbers) {
//         var_dump($numbers);
//    }
//    echo sum(1,2,4,5);

    // function add($a, $b) {
    //     return $a + $b;
    // }

    // // echo add(...[1, 2])."\n";

    // $array = array(2, 4);
    // echo add(...$array);

    //
    function sum($array,$max){   //For Reference, use:  "&$array"
        $sum=0;
        for ($i=0; $i<2; $i++){
            #$array[$i]++;        //Uncomment this line to modify the array within the function.
            $sum += $array[$i]; 
        }
        return ($sum);
    }
    
    $max = 1E7;                //10 M data points.
    $data = range(0,$max);
    var_dump($data);
    
    $start = microtime(true);
    for ($x = 0 ; $x < 100; $x++){
        $sum = sum($data, $max);
    }
    $end =  microtime(true);
    echo "Time: ".($end - $start)." s\n";

?>
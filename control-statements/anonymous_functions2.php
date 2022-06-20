<?php
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

    //Example #6 Attempting to use $this inside a static anonymous function
    // class Foo
    // {
    //     function __construct()
    //     {
    //         $func = static function() {
    //             var_dump($this);
    //         };
    //         $func();
    //     }
    // };
    // new Foo();

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


    function generate_lambda() : Closure
    {
        # creates new instance of lambda
        return function($v = null) {
            static $stored;
            if ($v !== null)
                $stored = $v;
            return $stored;
        };
    }

    $a = generate_lambda();  # creates new instance of statics
    $b = generate_lambda();  # creates new instance of statics
    $c = $b;                                 # uses the same instance of statics as $b

    $a('test AAA');
    $b('test BBB');
    $c('test CCC');  # this overwrites content held by $b, because it refers to the same object

    var_dump([ $a(), $b(), $c() ]);
?>
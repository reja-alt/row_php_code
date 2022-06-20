<?php
// Php code showing default error handling
 
// $file = fopen("geeks.txt", "w");
// var_dump($file);

// $file = fopen('test.txt', 'w');

// if(!file_exists('test.txt')) {
//     die('File not exist');
// } else {
//     $file = fopen("test.txt", "w");
// }

// error_function($error_level, $error_message, $error_file, $error_line, $error_context);

// Creates my error function which prints message
//to user
// function myError($error_no, $error_message) {
//     echo "Error :  [$error_no] $error_message";
//     die();
// }

// set_error_handler('myError');

// $a = 'oiuoi';
// $m = 8;

// echo($a / $m);

function checkValue($test) {
    if($test == 5) {
        throw new Exception('Error in solving');
        die();
    }

    return $test;
}

try {
    echo checkValue(5);
} catch (Exception $e) {
    echo 'Exception is Caught!' . "<br />";
}

function division_operation($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Raise Exception : Division by 0");
    }
    return $dividend / $divisor;
}
  
try {
    echo division_operation(12, 0);
} catch(Exception $e) {
    echo "Exception is Caught! : Unable to divide by 0........"  . "<br />";
}
finally {
    echo "Finally block execution - Process complete.";
}

// PHP Program to illustrate normal
// try catch block code
function demo($var) {
    echo "Before try block";
    try {
        echo "\n Inside try block";
              
        // If var is zero then only if will be executed
        if($var == 0)
        {
                  
            // If var is zero then only exception is thrown
            throw new Exception('Number is zero.');
                  
            // This line will never be executed
            echo "\n After throw (It will never be executed)" . "<br />"; 
        }
    }
          
    // Catch block will be executed only 
    // When Exception has been thrown by try block
    catch(Exception $e) {
            echo "\n Exception Caught", $e->getMessage();
        }
          
        // This line will be executed whether
        // Exception has been thrown or not 
        echo "\n After catch (will be always executed)";
}
  
// Exception will not be rised
demo(5);
  
// Exception will be rised here
demo(0);
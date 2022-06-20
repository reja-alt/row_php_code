<?php
// $errLvl = error_reporting();
// for ($i = 0; $i < 15;  $i++) {
//     print FriendlyErrorType($errLvl & pow(2, $i)) . "<br>\\n";
// }

// function FriendlyErrorType($type)
// {
//     echo $type;
//     switch($type)
//     {
//         case E_ERROR: // 1 //
//             return 'E_ERROR';
//         case E_WARNING: // 2 //
//             return 'E_WARNING';
//         case E_PARSE: // 4 //
//             return 'E_PARSE';
//         case E_NOTICE: // 8 //
//             return 'E_NOTICE';
//         case E_CORE_ERROR: // 16 //
//             return 'E_CORE_ERROR';
//         case E_CORE_WARNING: // 32 //
//             return 'E_CORE_WARNING';
//         case E_COMPILE_ERROR: // 64 //
//             return 'E_COMPILE_ERROR';
//         case E_COMPILE_WARNING: // 128 //
//             return 'E_COMPILE_WARNING';
//         case E_USER_ERROR: // 256 //
//             return 'E_USER_ERROR';
//         case E_USER_WARNING: // 512 //
//             return 'E_USER_WARNING';
//         case E_USER_NOTICE: // 1024 //
//             return 'E_USER_NOTICE';
//         case E_STRICT: // 2048 //
//             return 'E_STRICT';
//         case E_RECOVERABLE_ERROR: // 4096 //
//             return 'E_RECOVERABLE_ERROR';
//         case E_DEPRECATED: // 8192 //
//             return 'E_DEPRECATED';
//         case E_USER_DEPRECATED: // 16384 //
//             return 'E_USER_DEPRECATED';
//     }
//     return "";
// }


function checkNumber($num) {
    if($num >= 1) {
        throw new Exception('value must be less than 1');
    }
    return true;
}

try {
    checkNumber(0);
    echo 'If you see this text, the passed value is less than 1';
} catch (Exception $e) {
    echo 'Exception : ' . $e->getMessage();
}


class DivideByZeroException extends Exception {} 
class DivideByNegativeNoException extends Exception {}

function checkdivisor($dividend, $divisor){  
    // Throw exception if divisor is zero  
  try {  
      if ($divisor == 0) {  
        throw new DivideByZeroException;  
      }   
      else if ($divisor < 0) {  
         throw new DivideByNegativeNoException;   
      }   
      else {  
        $result = $dividend / $divisor;  
        echo "Result of division = $result </br>";  
      }  
    }  
    catch (DivideByZeroException $dze) {  
        echo "Divide by Zero Exception! </br>";  
    }  
    catch (DivideByNegativeNoException $dnne) {  
        echo "Divide by Negative Number Exception </br>";  
    }  
    catch (Exception $ex) {  
        echo "Unknown Exception <br />";  
    }  
}  




// function inverse($x) {
//     if ($x == 0) {
//         throw new Exception('Division by zero.');
//     }
//     return 1/$x;
// }

// try {
//     echo inverse(0) . "\n";
//     // echo inverse(0) . "\n";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "\n";
// }

// Continue execution
// echo "Hello World\n";


function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "First finally.\n";
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    echo "Second finally.\n";
}


class MyException extends Exception { }

class Test {
    public function testing($num) {
        // try {
            try {
                if($num % 2 == 0) {
                    throw new MyException('success');
                }
                return true;
            } catch (MyException $e) {
                // rethrow it
                // throw $e;
                echo 'Caught exception: ',  $e;
            }
        // } catch (Exception $e) {
        //     var_dump($e->getMessage());
        // }
    }
}

$foo = new Test;
$foo->testing(9);
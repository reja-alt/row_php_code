<?php
//     declare(strict_types = 1);
//     function sum(int $x, int $y, ...$numbers) : int {
//         // if($x % 2 == 0) {
//         //     $x /= 2;
//         // }
//         $sum = 0;
//         foreach($numbers as $value) {
//             $sum += $value;
//         }
//         // return $x + $y;
//         return $x + $y + $sum;
//     }
//     $a = 48;
//     $b = 4;
//     $numbers = [ 45, 45, 87];
//     echo sum($a, $b, ...$numbers) . "<br>";
//     var_dump($a, $b);

//     //
//     $retval = 0;
//     function foo($arg_1, $arg_2, /* ..., */ $arg_n)
//     {
//         global $retval;
//         echo "Example function.\n";
//         return $retval;
//     }
//     foo(54, 54, 74);
//     echo foo(54, 54, 74);

//     //

//     function food() 
// {
//   function bar() 
//   {
//     echo "I don't exist until foo() is called.\n";
//   }
// }

// /* We can't call bar() yet
//    since it doesn't exist. */

//    food();

//    /* Now we can call bar(),
//    foo()'s processing has
//    made it accessible. */

//     bar(); 
// function repeat($a, $b) {
//     return $a + $b;
// }
// function recursion($a, $b = null)
// {
//     if ($a < 20 && $b < 30) {
//         echo "$a\n";
//         recursion($a + 1);
//         repeat($a, $b);
//     }
// }
// // recursion(6);
// echo repeat(19, 26);
// echo recursion(3);




// //variable-length argument list with variable number arguments & default arguments.

// function myName1($b,...$a){
//     print_r($a);//Array ( [0] => Bar [1] => Baz )
//     echo "<br>";
//     echo $b;//Foo
    
//     }
    
//     $x = "Foo";
//     $y = "Bar";
//     $z = "Baz";
//     myName1($x,$y,$z);
//     echo "<br>";
    
//     function myName2($b="John",...$a){
//     print_r($a);//Array ( [0] => Bar [1] => Baz )
//     echo "<br>";
//     echo $b;//Foo
    
//     }
    
//     $x = "Foo";
//     $y = "Bar";
//     $z = "Baz";
//     myName2($x,$y,$z);
//     echo "<br>";

//     //

//     function concat($str1, $str2)
//     {
// 	    return $str1 . $str2;
//     }

//     $greeting = concat(
//                        'Welcome ',  
//                        'Admin'
//                     );
//     echo $greeting ."<br>";

//     //

// $counter = 1;
// function increase($value)
// {
// 	$value+= 1;
// 	echo $value. '<br>'; // 2
// }

// // increase the counter
// increase($counter);

// echo $counter . '<br>'; // 1

// //

// $counter = 1;
// function increase2( &$value )
// {
// 	$value += 1;
// 	echo $value . '<br>'; // 2
// }

// // increase the counter
// increase2($counter);

// echo $counter . '<br>'; // 2

// // //

// //add() function with two parameter  
// function add($x,$y)    
// {  
// $sum=$x+$y;  
// echo "Sum = $sum <br><br>";  
// }  
// //sub() function with two parameter  
// function sub($x,$y)    
// {  
// $sub=$x-$y;  
// echo "Diff = $sub <br><br>";  
// }  
// if(isset($_POST['add'])) 
// {
//     add($_POST['first'], $_POST['second']);
// } 
// if(isset($_POST['sub'])) 
// {
//     sub($_POST['first'], $_POST['second']);
// } 
// //call function, get  two argument through input box and click on add or sub button  
// if(isset($_POST['add']))  
// {  
// //call add() function  
//  add($_POST['first'],$_POST['second']);  
// }     
// if(isset($_POST['sub']))  
// {  
// //call add() function  
// sub($_POST['first'],$_POST['second']);  
// }  

// $number = 67;
// function numberCheck() {
//     global $number;
//     if(is_numeric($number)) {
//         return 1;
//     }
//     else {
//        return 0;
//     }
// }
// echo numberCheck();

// $content = "Check the string";
// $find_content = "string";
// if(strpos($content, $find_content) !== false) {
//     echo "$find_content remains in $content";
// }

// $mystring = 'abc';
// $findme   = 'a';
// $pos = strpos($mystring, $findme);
// echo $pos;

// //

// $query = 'are';

// $corpus = array(
//     1 => 'How are you?',
// );

// // $match_results=get_similar_documents($query,$corpus);
// // echo '<pre>';
// //     print_r($match_results);
// // echo '</pre>';

// $var_1 = 'PHP IS GREAT';
// $var_2 = 'WITH MYSQL';
// similar_text($var_1, $var_2, $percentage);
// echo $percentage;

// $query = 'are';

// $corpus = array(
//     1 => 'How are you?',
// );

// $match_results=get_similar_documents($query,$corpus);
// echo '<pre>';
//     print_r($match_results);
// echo '</pre>';

function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;

function lemon($type = "green") {
    return $type . "<br>";
}
echo lemon();
echo lemon(null);
echo lemon("lime");

?>  
<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
</form>  
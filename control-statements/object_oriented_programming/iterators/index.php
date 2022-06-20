<?php
// // function ItemIterable(iterable $items) {
// //     foreach($items as $item) {
// //         echo $item . PHP_EOL;
// //     }
// // }

// // $arr = ['a', 'b', 'c'];
// // ItemIterable($arr);

// // Create an Iterator
// class MyIterator implements Iterator {
//     private $items = [];
//     private $pointer = 0;
  
//     public function __construct($items) {
//       // array_values() makes sure that the keys are numbers
//       $this->items = array_values($items);
//     }
  
//     public function current() {
//         return $this->items[$this->pointer];
//     }
  
//     public function key() {
//       return $this->pointer;
//     }
  
//     public function next() {
//       $this->pointer++;
//     }
  
//     public function rewind() {
//       $this->pointer = 0;
//     }
  
//     public function valid() {
//       // count() indicates how many items are in the list
//       echo $this->pointer < count($this->items);
//       echo 'success';
//     }
//   }
  
//   // A function that uses iterables
//   function printIterable(iterable $myIterable) {
//     foreach($myIterable as $item) {
//       echo $item;
//     }
//   }
  
//   // Use the iterator as an iterable
//   $iterator = new MyIterator(["a", "b", "c"]);
//   echo $iterator->current() . "<br />";
//   echo $iterator->key() . "<br />";
//   echo $iterator->next() . "<br />";
//     $iterator->valid() . "<br />";
//   echo $iterator->rewind() . "<br />";
//   printIterable($iterator);


  
// class Fibonacci implements Iterator {
//     private $previous = 1;
//     private $current = 0;
//     private $key = 0;
   
//     public function current() {
//         return $this->current;
//     }
   
//     public function key() {
//         return $this->key;
//     }
   
//     public function next() {
//         $newprevious = $this->current;
//         $this->current += $this->previous;
//         $this->previous = $newprevious;
//         $this->key++;
//     }
   
//     public function rewind() {
//         $this->previous = 1;
//         $this->current = 0;
//         $this->key = 0;
//     }
   
//     public function valid() {
//         return true;
//     }
// }

// $seq = new Fibonacci;
// $i = 0;
// foreach ($seq as $f) {
//     echo "$f\n";
//     if ($i++ === 10) break;
// }


// class myIterator1 implements Iterator
//     {
//     private
//         $_array = array();
//     public function __construct(array $array)
//         {
//         $this->_array = $array;
//         }
//     public function rewind()
//         {
//         reset($this->_array);
//         }
//     public function current()
//         {
//         return current($this->_array);
//         }
//     public function key()
//         {
//         return key($this->_array);
//         }
//     public function next()
//         {
//         next($this->_array);
//         }
//     public function valid()
//         {
//         return $this->key() !== null;
//         }
//     }

// $it = new myIterator1(array('foo_1' => 'bar_1','foo_2' => 'bar_2'));

// //example 1 : foreach

// foreach($it as $key => $value)
//     {
//         echo "<pre>";
//         var_dump($key, $value);
//         echo "</pre>";
//     }
   
// //example 2 : while

// $it -> rewind();
// while($it->valid())
//     {
//     var_dump($it->key(), $it->current());
   
//     $it->next();
//     }

// //example 3 : for

// for($it->rewind();$it->valid();$it->next())
//     {
//         echo "<pre>";
//         var_dump($it->key(), $it->current());
//         echo "</pre>";
//     }


$values = ['one', 'two', 'three'];

foreach ($values as $v) {}
$current = current($values);
// $current === 'one', as you would expect

$iterator = new Iterator_array($values);
foreach ($iterator as $v) {}
$current = $iterator->current();    // do NOT use current($iterator) or key($iterator)!!!
// $current === false, but why?
?>
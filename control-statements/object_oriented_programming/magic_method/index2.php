<?php
class MethodTest{
    public static function __callStatic($n, $argu){
        // Note: value of $name is case sensitive.
        echo "<pre>";
        var_dump($argu);
        echo "</pre>";

        echo "Calling the static method '$n'"
             . implode(', ' , $argu);
}
}
$obj = new MethodTest;
MethodTest::above ('in context to the static method', 'new entry');

$array = ['mango', 'orange', 'banana'];
$item = implode(', ', $array);
echo $item;
echo "<br />";

class Employee{
    private $dat = array();
    public function __set($n, $val){
		echo "Executing the __set() method" . "<br />";
        $this->dat[$n] = $val;
    }

    public function __get($n){
        if (isset($this->dat[$n])){
            return $this->dat[$n];
        }
    }


}
$obj1 = new Employee();
 
//  __set() called
$obj1->name = 'reja';
$obj1->age = 27;
echo $obj1->phone = '0234746432';
// var_dump($obj1->dat);

class Manager{
    private $dat = array(); 
    public function __isset($n){
		echo "__isset() magic method invoked.";
		return isset($this->dat[$n]);
}
}
 
$obj2 = new Manager();
echo isset($obj2->empid);

class Employee2 {
    protected $n;
    public $name;

    public function assignValue($num, $name) {
        $this->n = $num;
        $this->name = $name;
    }

    public function __debugInfo() {
        echo "Debug information" ."<br />";
        return array('empployee' => $this->n, 'name' => $this->name);
    }

}

$item = new Employee2();
$item->assignValue(6, 'reja');
echo "<pre>";
var_dump($item);
echo "</pre>";

// __set_state_method

class Student {
    public $name;
    private $email;   
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }
 
    public static function __set_state(array $array) 
    {
        $obj = new Student;
        $obj->name = $array['name'];
        $obj->email = $array['email'];
 
        return $obj;
    }
}

$objStudent = new Student('John','John@yahoo.com');
var_export($objStudent);

// _clone method

Class Student_School {
}
 
class Student1 {
    private $name;
    private $email;
    private $object_student_school;
 
    public function __construct()
    {
        $this->object_student_school = new Student_School();
    }
 
    public function __clone()
    {
        $this->object_student_school = clone $this->object_student_school;
    }
}

$objStudentOne = new Student1();
$objStudentTwo = clone $objStudentOne;
var_dump($objStudentTwo);

// __invoke method

class Student2 {
    private $name;
    private $email;
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }
 
    public function __invoke()
    {
        echo 'Student object is called as a function!';
    }
}

$objectStudent2 = new Student2('reja', 'reja54@gmail.com');
$objectStudent2();
var_dump($objectStudent2);

// __serialize() and __unserialize() method

class Student3 {
    private $name;
    private $email;
    private $phone;
    private $db_connection_link;
 
    public function __construct($name, $email, $phone) 
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
 
    public function __serialize()
    {
        return ['name' => $this->name, 'mobile' => $this->phone, 'email' => $this->email];
    }
 
    public function __wakeup($data)
    {
        $this->email = $data['email'];
        $this->name = $data['name'];
        $this->phone = $data['mobile'];
         
        $this->db_connection_link = your_db_connection_function();
    }
}

$objectSerialize = new Student3('reja', 'reja64@gmail.com', 03424634);
echo "<pre>";
var_dump($objectSerialize);
echo "</pre>";


class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    // private function connect()
    // {
    //     $this->link = new PDO($this->dsn, $this->username, $this->password);
    // }

    public function __serialize(): array
    {
        return [
          'dsn' => $this->dsn,
          'user' => $this->username,
          'pass' => $this->password,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->dsn = $data['dsn'];
        $this->username = $data['user'];
        $this->password = $data['pass'];

        $this->connect();
    }
}

$objectItem = new Connection('hgf-8768', 'reja65', 03424634);
echo "<pre>";
var_dump($objectItem);
echo "</pre>";
<?php
class Person
{
    //property
    public  $name;
    public  $age;
    //method
    public function welcome()
    {
        echo "Welcome," . $this->name . "! <br>";
    }
}

$obj = new Person();
$obj->name = "John";
$obj->age = 30;

$obj->welcome();

$obj1 = new Person();
$obj1->name = "Jane";
$obj1->age = 25;
$obj1->welcome();

// echo "<pre>";
// var_dump($obj);

class child extends Person
{
    public function welcome()
    {
        echo "Hello," . $this->name . "! <br>";
    }
}
class Employee
{
private $name;
private $title;
public function getName() {
return $this->name;
}
public function setName($name) {
$this->name = $name;
}
public function sayHello() {
echo "Hi, my name is {$this->getName()}.";
}
}

?>

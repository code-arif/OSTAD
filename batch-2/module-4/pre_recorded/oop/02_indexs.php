<?php
//class name will start always capital latter
class Human{
    public $name;
    public function greet(){
        echo "আসসালামু আলাইকুম </br>";
    }
    public function sayName(){
        $this->name;
        echo "My name is {$this->name}";
    }
}

class Cat{
    public function greet(){
        echo "miyaw </br>";
    }
}

class Dog{
    public function greet(){
        echo "ghew </br>";
    }
}

//instance or instantiate
$c1 = new Human(); //using parenthesis() is a best practice
// $c2 = new Cat();
// $c3 = new Dog();
$c1 -> greet(); 
$c1 -> name = "Ariful"; //set
$c1 -> sayName();
// echo $c1->name; //get
// $c2 -> greet();
// $c3 -> greet();
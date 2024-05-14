<?php
class Man{
    public $name;
    public $age;
    //magic method
    public function __construct($personName, $personAge = 0) //$personAge = 0 means optional parameter.
    {
        echo"Construct method is running </br>";
        $this -> name = $personName;
        $this -> age = $personAge; 
    }
    public function greet(){
        echo "Greetings!! </br>";
        $this->sayName();
    }
    public function sayName(){
        if($this->age){
            echo "My name is {$this->name} & I'm {$this -> age} years old.</br>";
        }else{
            echo "My name is {$this->name}, I don't know how old I am </br>";
        }
    }
}

//instance or instantiate
$human1 = new Man("Arful", 23);
$human2 = new Man("Ahsan", 45);
$human3 = new Man("Habiba");
$human1 -> greet();
$human2 -> greet();
$human3 -> greet();

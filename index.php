<?php

class Human {
    public $name;
    public $age;
    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function getInfo()
    {
        return [
            "name" => $this->name,
            
            "age" => $this->age
        ];
    }
}


$human = new Human(25, "John Doe");

print_r($human->getInfo());
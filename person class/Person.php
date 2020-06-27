<?php 

class Person {
    
    public $name; 
    
    public $age;
    
    public function __construct ($name) {
        
        $this -> name = $name;
        
    }
}

$jhon = new Person('Jhon Doe');

$jhon -> age = 30;

$jhon -> age++;

var_dump ($jhon);

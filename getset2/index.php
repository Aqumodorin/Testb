<?php

function stv ($data) {
    
    echo '<pre>';
    
    var_dump ( $data );
    
    echo '</pre>';
    
}

class Person {
    
    public $name;
    
    public $age;
    
    public function __construct($name) {
        
        $this -> name = $name;
    }
    
    public function getAge() {
        
        return $this -> age * 365;
        
    }
    
    public function setAge($age) {
        
        if ( $age < 18 ) {
            
            throw new Exception('Person not old enough');
//            exit('Person not old enough');
        }
        
        $this -> age = $age;
    }
}

$jhon = new Person('Jhon Doe');

$jhon -> setAge(30);

$jhon -> age = 3;

//$jhon -> age = 15; // overrides
//$jhon -> setAge(17.99 - 0.01);
    
stv($jhon -> getAge());
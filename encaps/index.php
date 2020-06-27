<?php

function stv ($data) {
    
    echo '<pre>';
    
    var_dump ( $data );
    
    echo '</pre>';
    
}

class Person {
    
    private $name;
    
    private $age;
    
    public function __construct($name) {
        
        $this -> name = $name;
    }
    
    public function getAge() {
        
        return $this -> age;
        
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

$jhon -> setAge(18);
    
stv($jhon -> getAge());
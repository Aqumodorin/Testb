<?php 

class Task {
    
    protected $description;
    
    protected $completed = false;
    
    public function __construct ($desciption) {
        
        $this -> description = $description;
        
    }
    
}

$task = new Task('go to the store');
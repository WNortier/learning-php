<?php

//Think of whatever you want to build and spot the nouns - in this case Task

class Task {

    // protected $description;

    //By setting the access modifiers to public here they are visible 
    //Another option is to keep them protected but to return them with a method

    public $description;
    public $completed = false;

    public function __construct($description) 
    
    {
        //notice new arrow syntax
        $this->description = $description;
    }

    public function complete()

    {
        $this->completed = true;
    }

    public function isComplete()

    {
        return $this->completed;
    }

}

//We can specify any number of functions or properties to help us interact with the class
//Any arguments passed through here are accepted in the constructor
//An instance of a class is known as an object
//An object is an instance of a class
//We can assign a property to an object passed into the class using the this-> syntax



// $task = new Task('Go to the store');

// $task->complete();

// var_dump($task->isComplete());

$tasks = [

    new Task('Go to the store'),
    new Task('Clean my room'),
    new Task('Finish studying')

];

$tasks[0]->complete();

require 'index.view.php';
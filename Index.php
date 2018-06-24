<?php
 require 'functions.php';
// class name Should be noun

class Task {
    // defined in the class fucntion called method
    // constructor
    // property defined here
    // encapuslation public private protected  
    public $description;
    protected $completed= false;

    public function __construct($description)
    {
        // automatically triggered on istantiation
        // descrition is a property
        //
        $this -> description = $description;
    }

    public function complete (){
      $this -> completed = true;
    }

    public function isComplete(){
        return $this -> completed;

    }
}

$tasks = [
    //different isntants of the class
    new Task ('Go to the store'),
    new Task ('Finish my screencast'),
    new Task ('Clean my room')
];

//dd($task);
// instentiated a task 
// $task = new Task('Go to store'); // new task object
// $task -> complete(); // complete the task
// var_dump($task -> isComplete());
// dd($task);


//$names = [ 'ali', 'usman', 'bilal'];
// $animals = ['cat','dog','tiger','elephant','lion','bear'];
// $animals [] = 'jaguar';
// htmlspecialchars();
//ucwords();
//die();
// var_dump();

// function dumber ($one,  $two, $three){
//     var_dump($one , $two , $three);
// }


// echo '<pre>';
// dumber( 'Hello',2018,'world');
// echo '</pre>';
// ageRest(20);
// dd($animals);
// dd(['Car','Bus']);

// $person = [
//     'age'=> 31,
//     'hair'=>'black',
//     'career'=> 'Software Developer'
// ];

// dd($person);

// $task= [ 'title' =>' Make associative array of task ', 
// 'due'=> ' Today','assigned_to'=> ' Ali Adil','completed'=> false];

// $person ['name'] = 'Ali Adil';

//echo $person['age'];

//die(var_dump($person));
//unset ($person['age']);
//unset ($person['hair']);

require 'index.view.php';
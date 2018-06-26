<?php
 require 'functions.php';

 try{
$pdo = new PDO('mysql:host=127.0.0.1; dbname=test','username','');
}

catch(PDOException $e){
    die('could not connect');
}
// class name Should be noun

// class Task {
//     // defined in the class fucntion called method
//     // constructor
//     // property defined here
//     // encapuslation public private protected  
//     public $description;
//     public $completed= false;

//     // automatically triggered on istantiation
//     // when ever we create new task
//     public function __construct($description)
//     {
        
//         // description is a property
//        // assinging argument value to  property 
//         $this -> description = $description;
//     }

//     public function complete (){
//       $this -> completed = true;
//     }

//     public function isComplete(){
//         return $this -> completed;

//     }

//     // public function description (){

//     //     return $this -> description;
//     // }
// }

// $tasks = [
//     //different isntants of the class
//     new Task ('Go to the store'),
//     new Task ('Finish my screencast'),
//     new Task ('Clean my room')
// ];

// $tasks[0] -> complete();

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
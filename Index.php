<?php

//$names = [ 'ali', 'usman', 'bilal'];
//$animals = ['cat','dog','tiger','elephant','lion','bear'];
// $animals [] = 'jaguar';

$person = [
    'age'=> 31,
    'hair'=>'black',
    'career'=> 'Software Developer'
];

$task= [ 'title' =>' Make associative array of task ', 
'due'=> ' Today','assigned_to'=> ' Ali Adil','completed'=> true];

$person ['name'] = 'Ali Adil';

//echo $person['age'];

//die(var_dump($person));
unset ($person['age']);
unset ($person['hair']);

require 'index.view.php';
<?php

$person = [

    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'

];

//Pusing to an associative array
$person['name'] = 'Warwick';

//Removing from an associative array
unset($person['age']);

//echo expects a string but gets an array when i use echo $person 
//when I want to echo something which is not a string or an integer I can use var_dump($person)
//pre tags in html preserve the formatting

// echo '<pre>'; 
// var_dump($person);
// echo '</pre>';

die(var_dump($person));

echo 'after';

require 'index.view.php';
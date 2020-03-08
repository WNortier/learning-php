<?php

require 'Task.php';


$database = require 'bootstrap.php';


$tasks = $database->selectAll('todos');


// die(var_dump($tasks));


require 'index.view.php';

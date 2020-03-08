<?php


require 'Task.php';

require 'functions.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

// echo '<pre>';
// var_dump($statement->fetchAll(PDO::FETCH_OBJ));
// echo '</pre>';

var_dump($tasks[0]->foobar());

require 'index.view.php';

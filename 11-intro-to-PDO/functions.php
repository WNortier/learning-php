<?php

function connectToDb(){

    try {
   
        return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'warwick', 'wnortier');
   
    } catch (PDOException $e) {
    
        echo $e;
    }
    
}

function fetchAllTasks($pdo){

    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
<?php

class Connection {

        public static function make(){

            try {
           
                return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'warwick', 'wnortier');
           
            } 
            
            catch (PDOException $e) {
                
                die($e->getMessage()); 
   
            }
            
        }
}
<?php


function dd($val) {
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>'; 
}

function oldEnough($val) {
    echo $val >= 18 ? "Come on in" : "You are too young";
}


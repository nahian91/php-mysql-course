<?php
    // $var = +11;
    function hello() {

    }
    // $check = is_array($var);
    // $check = is_bool($var);
    // $check = is_int($var);
    // $check = is_scalar($var);
    // $check = is_null($var);
    // $check = is_numeric($var);
    $check = is_callable('hello');

    if($check) {
        echo $check . ' is a Function';
    } else {
        echo $check . ' not a Function';
    }
?>
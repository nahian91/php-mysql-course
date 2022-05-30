<?php

    // Local Variable
    // function local() {
    //     $x = 10;
    //     echo "X variable inside function: $x";
    // }
    // local();
    // echo "X vairable outside function $x";

    // Global Variable
    $x = 10;
    function global1() {
        global $x;
        echo "X vairbale inside function $x <br/>";
    }
    global1();
    echo "X variable outside function $x";

?>
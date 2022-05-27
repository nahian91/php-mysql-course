<?php

    $mark = 67;

    switch(true) {
        case ($mark >=80):
            echo 'A+';
            break;
        case ($mark >=70 && $mark <=79):
            echo 'A';
            break;
        case ($mark >=60 && $mark <=69):
            echo 'B';
            break;
        case ($mark >=50 && $mark <=59):
            echo 'C';
            break;
        case ($mark >=40 && $mark <=49):
            echo 'D';
            break;
        default:
            echo 'Failed';
    }

    // $color = "orange";

    // switch($color) {
    //     case 'green':
    //         echo 'Color is Green';
    //         break;
        
    //     case 'blue':
    //         echo 'Color is Blue';
    //         break;

    //     case 'red';
    //         echo 'Color is Red';
    //         break;

    //     default:
    //         echo 'Color not match!';
    // }
?>
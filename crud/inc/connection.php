<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'sms');
    if(!$con) {
        die('Not Connected' . mysqli_error($con));
    }
?>
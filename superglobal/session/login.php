<?php
    session_start();

    if($_POST['email'] == 'admin@gmail.com' && $_POST['pass'] == '123') {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['pass'];

        echo 'Welcome. Your email is ' .$_SESSION['email']. ' and Password is ' . $_SESSION['pass'];
        echo '<br/><br/> <a href="logout.php">Logout</a>';
    } else {
        echo 'Not Match';
    }
    
?>
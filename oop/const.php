<?php
    class Welcome  {
        const WELCOME_MESSAGE = 'Welcome to our New Course';

        function welcome_msg() {
            return self :: WELCOME_MESSAGE;
        }
    }
    //echo Welcome :: WELCOME_MESSAGE;
    $msg = new Welcome;
    echo $msg->welcome_msg();
?>
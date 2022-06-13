<?php
    $var  = 'https://www.go^^ogle.com';
    echo filter_var($var, FILTER_SANITIZE_URL);
?>
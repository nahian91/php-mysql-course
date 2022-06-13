<?php
    echo 'Hours: '. date('H') . "<br/>";
    echo 'Minutes: '. date('i') . "<br/>";
    echo 'Seconds: '. date('s') . "<br/>";

    date_default_timezone_set('America/New_York');
    echo 'Current Time: '.date('h:i:s A');
    echo '<br/><br/><br/>';

    echo 'Today Date is: '.date('D-M-Y'). ' and Time is '.date('h:i:s A');
?>
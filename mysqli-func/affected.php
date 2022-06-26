<?php
    $con = mysqli_connect('localhost', 'root', '', 'company') or die (mysqli_error());

    $sql = "DELETE FROM std WHERE subject  = 'Bangla'";
    $query = mysqli_query($con, $sql);

    echo 'Total Rows: ' . mysqli_affected_rows($con);
?>
<?php
    $con = mysqli_connect('localhost', 'root', '', 'company') or die (mysqli_error());

    $sql = "SELECT * FROM employees";
    $query = mysqli_query($con, $sql);

    $json_array = [];

    while($row = mysqli_fetch_assoc($query)) {
        $json_array[] = $row;
    }
    $json_encode = json_encode($json_array);

    print_r($json_encode);
?>  
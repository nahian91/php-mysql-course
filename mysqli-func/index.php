<?php
    $con = mysqli_connect('localhost', 'root', '', 'student') or die (mysqli_error());

    $sql = "SELECT * FROM std_info";
    $query = mysqli_query($con, $sql);


    while($result = mysqli_fetch_field($query)) {
        echo '<pre>';
            print_r($result);
        echo '</pre>';
    }

    

    // echo 'Hello '.$result['name']. '. Your Id is '.$result[0]. ' and your Class is ' .$result[2] . ' and Roll is ' .$result[3];

    
?>
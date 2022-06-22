<?php
    $con = mysqli_connect('localhost', 'root', '', 'company') or die (mysqli_error());

    $file = "info.json";

    $data = file_get_contents($file);

    $array = json_decode($data, true);

    foreach($array as $value) {
        $name = $value['name'];
        $email = $value['email'];
        $gender = $value['gender'];
        $city = $value['city'];
        $country = $value['country'];
        $salary = $value['salary'];

        $sql = "INSERT INTO employees (name, email, gender, city, country, salary) VALUES ('$name', '$email', '$gender', '$city', '$country', '$salary')";
        mysqli_query($con, $sql);
    }
    if($sql) {
        echo "Data Insert Success";
    } else {
        echo "Failded!";
    }
?>
<?php
    if(isset($_POST['submit'])) {
        echo 'Clicked';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" id="">
        <input type="password" name="pass" id="">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
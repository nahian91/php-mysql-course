<?php
    $con  = mysqli_connect('localhost', 'root' , '', 'registration') or die(mysqli_error());

    if(isset($_POST['submit'])) {
        $loginfo = $_POST['loginfo'];
        $logpass = $_POST['logpass'];

        $error = [];

        if(empty($loginfo)) {
            $error['loginfo'] = 'Haha';
        }
        if(empty($logpass)) {
            $error['logpass'] = 'tata';
        }

        if(count($error)) {
            $check_info = mysqli_query($con, "SELECT * FROM users WHERE email = '$loginfo'");
            echo mysqli_num_rows($check_info) ."<br>";
            if(mysqli_num_rows($check_info) == 0) {
                $check_pass = mysqli_query($con, "SELECT * FROM users WHERE password = '$logpass'");
                echo mysqli_num_rows($check_pass) ."<br>";
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xxl-5 mx-auto">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="loginfo" class="form-control">
                        <span>
                            <?php
                                if(isset($error['loginfo'])) {
                                    echo $error['loginfo'];
                                }       
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="logpass" class="form-control">
                        <span>
                            <?php
                                if(isset($error['logpass'])) {
                                    echo $error['logpass'];
                                }       
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="submit" value="Login" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
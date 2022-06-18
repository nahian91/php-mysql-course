<?php
    session_start();
    $con  = mysqli_connect('localhost', 'root' , '', 'registration') or die(mysqli_error());

    if(isset($_POST['login'])) {
        $login_email = $_POST['login_email'];
        $login_pass = $_POST['login_pass'];

        $error = [];

        if(empty($login_email)) {
            $error['login_email'] = "Please write your Email"; 
        }
        if(empty($login_pass)) {
            $error['login_pass'] = "Please write your Password"; 
        }

        if(count($error) == 0) {
            $login_info = mysqli_query($con, "SELECT * FROM users WHERE email = '$login_email'");
            if(mysqli_num_rows($login_info) > 0) {
                $row = mysqli_fetch_assoc($login_info);
                if($row['password'] == md5($login_pass)) {
                    $_SESSION['email'] = $login_email;
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['uname'] = $row['uname'];
                    $_SESSION['country'] = $row['country'];
                    $_SESSION['address'] = $row['address'];
                    header('Location: index.php');
                } else {
                    $pass_error = 'Password Not Match';
                }
            } else {
                $email_error = 'Email Not Match';
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
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 mx-auto">
                <h4 class="p-3 mb-3 bg-primary text-white text-center">Login Form</h4>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="login_email" class="form-control" value="<?php if(isset($login_email)) {echo $login_email;} ?>">
                        <span>
                            <?php if(isset($error['login_email'])) 
                                {
                                    echo $error['login_email'];
                                } 
                            ?>

                            <?php if(isset($email_error)) 
                                {
                                    echo $email_error;
                                } 
                            ?></span>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="login_pass" class="form-control" value="<?php if(isset($login_pass)) {echo $login_pass;} ?>">
                        <span>
                            <?php if(isset($error['login_pass'])) 
                                {
                                    echo $error['login_pass'];
                                } 
                            ?>
                            <?php if(isset($pass_error)) 
                                {
                                    echo $pass_error;
                                } 
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="login" value="Login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
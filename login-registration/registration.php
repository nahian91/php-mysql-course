<?php

    $con  = mysqli_connect('localhost', 'root' , '', 'registration') or die(mysqli_error());

    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        if(isset($_POST['gender'])) {$gender = $_POST['gender'];}
        if(isset($_POST['games'])) {$games = $_POST['games']; $game = implode(', ', $games);}
        if(isset($_POST['country'])) {$country = $_POST['country'];}
        $pass = md5($_POST['pass']);
        $cpass = md5($_POST['cpass']);

        $error = [];

        if(empty($fname)) {
            $error['fname'] = 'Please write your Full Name';
        }
        if(empty($uname)) {
            $error['uname'] = 'Please write your User Name';
        }
        if(empty($email)) {
            $error['email'] = 'Please write your Email';
        }
        if(empty($address)) {
            $error['address'] = 'Please write your Address';
        }
        if(empty($gender)) {
            $error['gender'] = 'Please select your Gender';
        }
        if(empty($games)) {
            $error['games'] = 'Please select your Games';
        }
        if(empty($country)) {
            $error['country'] = 'Please select your Country';
        }
        if(empty($pass)) {
            $error['pass'] = 'Please write your Password';
        }
        if(empty($cpass)) {
            $error['cpass'] = 'Please write your Confirm Password';
        }

        if(count($error) == 0) {
            $email_check = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
            $email_count = mysqli_num_rows($email_check);
            if($email_count == 0) {
                $username_check = mysqli_query($con, "SELECT * FROM users WHERE uname = '$uname'");
                $username_count = mysqli_num_rows($username_check);
                if($username_count == 0) {
                    if(strlen($uname) > 6) {
                        if(strlen($pass) > 7) {
                            if($pass == $cpass) {
                                $insert = "INSERT INTO users (fname, uname, email, address, gender, games, country, password) VALUES ('$fname', '$uname', '$email', '$address', '$gender', '$game', '$country', '$pass')";
                                $result = mysqli_query($con, $insert);
                                if($result) {
                                    $insert_msg = "<div class='alert alert-primary'>Registration Success! Thanks</div>";
                                } else {
                                    $insert_msg = "<div class='alert alert-danger'>Registration Failed!</div>";
                                }
                            } else {
                                $pass_match = "Password Not Match!";
                            }
                        } else {
                            $pass_len = "Password at least 8 Character";
                        }
                    } else {
                        $user_len = "Username at least 6 Character";
                    }
                } else {
                    $username_match = 'Username Aready Exists!';
                }
            } else {
                $email_match = 'Email Aready Exists!';
            }
            
        } else {
            echo 'No';
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
                <?php if(isset($insert_msg)) {echo $insert_msg;} ?>
                <h4 class="p-3 mb-3 bg-primary text-white text-center">Registration Form</h4>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text" name="fname" class="form-control" value="<?php if(isset($fname)) {echo $fname;} ?>">
                        <span>
                            <?php
                                if(isset($error['fname'])) {
                                    echo $error['fname'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>User Name</label>
                        <input type="text" name="uname" class="form-control" value="<?php if(isset($uname)) {echo $uname;} ?>">
                        <span>
                            <?php
                                if(isset($error['uname'])) {
                                    echo $error['uname'];
                                }
                            ?>
                        </span>
                        <span>
                            <?php
                                if(isset($username_match)) {
                                    echo $username_match;
                                }
                            ?>
                        </span>
                        <span>
                            <?php
                                if(isset($user_len)) {
                                    echo $user_len;
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php if(isset($email)) {echo $email;} ?>">
                        <span>
                            <?php
                                if(isset($error['email'])) {
                                    echo $error['email'];
                                }
                            ?>
                        </span>
                        <span>
                            <?php
                                if(isset($email_match)) {
                                    echo $email_match;
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <textarea name="address" class="form-control"><?php if(isset($address)) {echo $address;} ?></textarea>
                        <span>
                            <?php
                                if(isset($error['address'])) {
                                    echo $error['address'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Gender</label>
                        <br>
                        <input type="radio" name="gender" value="Male" <?php if(isset($gender) && $gender == 'Male') {echo 'checked';} ?>> Male
                        <input type="radio" name="gender" value="Female" <?php if(isset($gender) && $gender == 'Female') {echo 'checked';} ?>> Female
                        <br>
                        <span>
                            <?php
                                if(isset($error['gender'])) {
                                    echo $error['gender'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Gamses</label>
                        <br>
                        <input type="checkbox" name="games[]" value="Cricket" <?php if(isset($games)) { if(in_array('Cricket', $games)) { echo 'checked';} } ?>> Cricket
                        <input type="checkbox" name="games[]" value="Football" <?php if(isset($games)) { if(in_array('Football', $games)) { echo 'checked';} } ?>> Football
                        <input type="checkbox" name="games[]" value="Hockey" <?php if(isset($games)) { if(in_array('Hockey', $games)) { echo 'checked';} } ?>> Hockey
                        <br>
                        <span>
                            <?php
                                if(isset($error['games'])) {
                                    echo $error['games'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Select Country</label>
                        <select name="country" class="form-control">
                            <option selected disabled>Select Country</option>
                            <option value="Banglades" <?php if(isset($country) && $country == 'Bangladesh') {echo 'selected';} ?>>Banglades</option>
                            <option value="USA" <?php if(isset($country) && $country == 'USA') {echo 'selected';} ?>>USA</option>
                            <option value="UK" <?php if(isset($country) && $country == 'UK') {echo 'selected';} ?>>UK</option>
                            <option value="Canada" <?php if(isset($country) && $country == 'Canada') {echo 'selected';} ?>>Canada</option>
                        </select>
                        <span>
                            <?php
                                if(isset($error['country'])) {
                                    echo $error['country'];
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control" value="<?php if(isset($pass)) {echo $pass;} ?>">
                        <span>
                            <?php
                                if(isset($error['pass'])) {
                                    echo $error['pass'];
                                }
                            ?>
                        </span>
                        <span>
                            <?php
                                if(isset($pass_len)) {
                                    echo $pass_len;
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password" name="cpass" class="form-control" value="<?php if(isset($cpass)) {echo $cpass;} ?>">
                        <span>
                            <?php
                                if(isset($error['cpass'])) {
                                    echo $error['cpass'];
                                }
                            ?>
                        </span>
                        <span>
                            <?php
                                if(isset($pass_match)) {
                                    echo $pass_match;
                                }
                            ?>
                        </span>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Registration" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
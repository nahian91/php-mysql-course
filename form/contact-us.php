<?php
    if(isset($_POST['submit'])) {
        $name = error($_POST['name']);
        $email = error($_POST['email']);
        $subject = error($_POST['subject']);
        $message = error($_POST['message']);

        // Errors
        $error = [];

        if(empty($name)) {
            $error['name'] = "Please, Insert your name.";
        }
        if(empty($email)) {
            $error['email'] = "Please, Insert your email.";
        }
        if(empty($subject)) {
            $error['subject'] = "Please, Insert your subject.";
        }
        if(empty($message)) {
            $error['message'] = "Please, Insert your message.";
        }
        if(empty($_POST['vote'])) {
            $error['vote'] = "Please, Insert your vote.";
        }
        if(empty($_POST['color'])) {
            $error['color'] = "Please, Insert your color.";
        }

        // Mail
        $to = 'nahiansylhet@gmail.com';
        $from = 'From' . $email;
        $body = 'Name'.$name.'\n Email'.$email.'\n Subject'.$subject.'\n Message'.$message.'\n Vote'.$_POST['vote'].'\n Color'.$_POST['color'];

        $check = mail($to, $from, $body);
        
        if($check == true) {
            ?>
                <span>Message Send Successfully</span>
            <?php
        }
    }

    function error($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <form action="" method="POST">
            <p>
                <label>Name</label>
                <input type="text" name="name" value="<?php if(isset($name)) {echo $name;} ?>">
                <span>
                    <?php
                        if(isset($error['name'])) {
                            echo $error['name'];
                        }
                    ?>
                </span>
            </p>
            <p>
                <label>Email</label>
                <input type="email" name="email" value="<?php if(isset($email)) {echo $email;} ?>">
                <span>
                    <?php
                        if(isset($error['email'])) {
                            echo $error['email'];
                        }
                    ?>
                </span>
            </p>
            <p>
                <label>Subject</label>
                <input type="text" name="subject" value="<?php if(isset($subject)) {echo $subject;} ?>">
                <span>
                    <?php
                        if(isset($error['subject'])) {
                            echo $error['subject'];
                        }
                    ?>
                </span>
            </p>
            <p>
                <label>Message</label>
                <textarea name="message"><?php if(isset($message)) {echo $message;} ?></textarea>
                <span>
                    <?php
                        if(isset($error['message'])) {
                            echo $error['message'];
                        }
                    ?>
                </span>
            </p>
            <p>
                <label>Are You Sure?</label>
                <input type="radio" name="vote" <?php if(isset($_POST['vote']) && $_POST['vote'] == 'Yes') {echo 'checked';} ?> value="Yes">Yes
                <input type="radio" name="vote" <?php if(isset($_POST['vote']) && $_POST['vote'] == 'No') {echo 'checked';} ?> value="No">No
                <input type="radio" name="vote" <?php if(isset($_POST['vote']) && $_POST['vote'] == 'N/A') {echo 'checked';} ?> value="N/A">N/A
                <br>
                <span>
                    <?php
                        if(isset($error['vote'])) {
                            echo $error['vote'];
                        }
                    ?>
                </span>
            </p>
            <p>
                <label>Select Color</label>
                <select name="color">
                    <option disabled selected>Choose Color</option>
                    <option value="Red" <?php if(isset($_POST['color']) && $_POST['color'] == 'Red') {echo 'selected';} ?>>Red</option>
                    <option value="Green" <?php if(isset($_POST['color']) && $_POST['color'] == 'Green') {echo 'selected';} ?>>Green</option>
                    <option value="Blue" <?php if(isset($_POST['color']) && $_POST['color'] == 'Blue') {echo 'selected';} ?>>Blue</option>
                </select>
                <br>
                <span>
                    <?php
                        if(isset($error['color'])) {
                            echo $error['color'];
                        }
                    ?>
                </span>
            </p>
            </p>
                <input type="submit" value="Send" name="submit">
            </p>
        </form>
    </div>
</body>
</html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input type="text" placeholder="Name" name="uname"><br/><br/>
            <input type="email" placeholder="Email" name="email"><br/><br/>
            <textarea placeholder="Message" name="message"></textarea><br/><br/>
            <input type="submit" value="Submit" name="submit">
        </form>
        <br><br><br>
        <?php
            if(isset($_POST['submit'])) {
                echo $_POST['uname']. "<br/>";
                echo $_POST['email']. "<br/>";
                echo $_POST['message'];
            }
        ?>
    </body>
</html>
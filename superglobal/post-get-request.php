<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="recieve.php" method="GET">
            <p>Are you sure?</p>
            <input type="radio" name="vote">Yes
            <input type="radio" name="vote">No
            <input type="radio" name="vote">N/A
            <br/>
            <br/>
            <input type="text" placeholder="Name" name="uname"><br/><br/>
            <input type="email" placeholder="Email" name="email"><br/><br/>
            <textarea placeholder="Message" name="message"></textarea><br/><br/>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
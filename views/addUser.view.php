<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="../css/install.css">
        <title>Add person</title>
    </head>
    <body>
        <div class="container">
            <h1>SecureSys installer</h1>
            <p>Add users to the system</p>
            <form class="form" action="addUser.php" method="post">
                <input type="text" name="fname" placeholder="Enter First Name" autofocus><br>
                <input type="text" name="lname" placeholder="Enter Last Name"><br>
                <input type="email" name="email" placeholder="Enter Email"><br>
                <input type="tel" name="phone" placeholder="Enter Phone"><br>
                <input type="text" name="position" placeholder="Enter Position (if visitor enter 'Visitor')"><br>
                <input type="text" name="pin" placeholder="Enter PIN (4 digits)" maxlength="4" minlength="4"><br>
                <input type="text" name="pinConf" placeholder="Confirm PIN (4 digits)" maxlength="4" minlength="4"><br>
                <input type="submit" name="submit" value="Add"><input type="submit" name="next" value="Next">
            </form>
            <span class="adduser"></span>
        </div>
    </body>
</html>

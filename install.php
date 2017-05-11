<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/install.css">
    <title>Database Connection Settings</title>
</head>
<body>
<div class="container">
    <h1>SecureSys installer</h1>
    <p>Please follow the instructions to complete the setup</p>
    <form class="form" action="server/generate_db.php" method="post">
        <input type="text" name="db_server" placeholder="Database ip location *" autofocus required><br>
        <input type="text" name="db_name" placeholder="Database name *" required><br>
        <input type="text" name="db_user" placeholder="Database username *" required><br>
        <input type="password" name="db_password" placeholder="Database password *" required><br>
        <input type="submit" name="submit" value="Next">
    </form>
</div>
</body>
</html>

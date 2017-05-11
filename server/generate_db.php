<?php
    require "../views/genDatabase.view.php";

 if (isset($_POST["submit"])) {
     $dbserver = $_POST['db_server'];
     $dbname = $_POST['db_name'];
     $dbuser = $_POST['db_user'];
     $dbpassword = $_POST['db_password'];

     define("SERVER", "$dbserver");
     define("DBNAME", "$dbname");
     define("USER", "$dbuser");
     define("PASSWORD", "$dbpassword");


     $conn = new mysqli(SERVER, USER, PASSWORD);

     if ($conn->connect_error) {
         die("Connection with the database failed (..server/generate_db.php ln21)" . $conn->connect_error);
     }

//Creating database
     $sql = "CREATE DATABASE $dbname";
     if ($conn->query($sql) === TRUE) {
         echo "Successfully created database $dbname </br>";
     } else {
         echo "Error creating database $dbname" . $conn->error;
     }

//Creating db tables
     $conn = new mysqli(SERVER, USER, PASSWORD, DBNAME);

     if ($conn->connect_error) {
         die("Could not connect to $dbname" . $conn->connect_error);
     }

     $sql = "CREATE TABLE people (
                  id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  date TIMESTAMP,
                  fname VARCHAR(10),
                  lname VARCHAR(20),
                  email VARCHAR(35),
                  phone VARCHAR(14),
                  position VARCHAR(20),
                  pin INT(4)
                )";
     if ($conn->query($sql) === TRUE) {
         echo "Done generating table" . "</br>";
     } else {
         echo "Error generating table _people_ (../server/generate_db.php ln52)" . $conn->error;
     }

//  Creating table activity

     $conn = new mysqli(SERVER, USER, PASSWORD, DBNAME);

     if ($conn->connect_error) {
         die("Could not connect to $dbname" . $conn->connect_error);
     }

     $sql = "CREATE TABLE activity (
                  id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                  firstname VARCHAR(10),
                  lastname VARCHAR(20),
                  date VARCHAR (30),
                  time VARCHAR (30)
                )";
     if ($conn->query($sql) === TRUE) {
         echo "Done generating table" . "</br>";
     } else {
         echo "Error generating table _people_ (../server/generate_db.php ln52)" . $conn->error;
     }
     $conn->close();

     //Create dbconnect.php file

     $dbconnect = fopen("libs/dbconnect.php", "w") or die("Unable to open /libs/dbconnect.php. Check folder/file permissions.");
     $php = "<?php \n";
     fwrite($dbconnect, $php);
     $php = "\$dbserver = '$dbserver';\n";
     fwrite($dbconnect, $php);
     $php = "\$dbuser = '$dbuser';\n";
     fwrite($dbconnect, $php);
     $php = "\$dbpassword = '$dbpassword';\n";
     fwrite($dbconnect, $php);
     $php = "\$dbname = '$dbname';\n";
     fwrite($dbconnect, $php);
     $php = "?>\n";
     fwrite($dbconnect, $php);
     fclose($dbconnect);

     echo "Successfully written <strong>dbconnect.php</strong> in the filesystem";
     header("Location: addUser.php");
 }

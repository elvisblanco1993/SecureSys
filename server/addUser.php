<?php
    require "../views/addUser.view.php";

    if (isset($_POST["submit"])) {
        $fname = strip_tags(trim($_POST["fname"]));
        $lname = strip_tags(trim($_POST["lname"]));
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $position = $_POST["position"];
        $pin = $_POST["pin"];
        $pinConfirmation = $_POST["pinConf"];

        if ($pin === $pinConfirmation) {
            require 'libs/dbconnect.php';

            $conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $fname = strip_tags(trim($_POST["fname"]));
            $lname = strip_tags(trim($_POST["lname"]));
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $position = $_POST["position"];
            $pin = $_POST["pin"];


            $sql = "INSERT INTO people (fname, lname, email, phone, position, pin)
         VALUES ('$fname', '$lname', '$email', '$phone', '$position', '$pin')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='adduser'>User '$fname $lname' successfully added</p>";
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }else {
            echo "Pins do not match";
        }
    }

    if (isset($_POST["next"])){
        header("Location: ../endinstallation.php");
    };

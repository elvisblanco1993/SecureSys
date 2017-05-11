<?php

echo "<div class='modal fade' id='createUser' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
echo "<div class='modal-dialog' role='document'>";
echo "<div class='modal-content'>";
echo "<div class='modal-header'>";
echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
echo "<h4 class='modal-title' id='myModalLabel'>Add User</h4>";
echo "</div>";
echo "<div class='modal-body'>";

//Form
echo "<form class='form' action='' method='post'>";
echo "<input type='text' name='fname' placeholder='Enter First Name' autofocus='' >";
echo "<input type='text' name='lname' placeholder='Enter Last Name'><br>";
echo "<input type='email' name='email' placeholder='Enter Email'><br>";
echo "<input type='tel' name='phone' placeholder='Enter Phone'><br>";
echo "<input type='text' name='position' placeholder='Enter Position (if visitor enter *Visitor*)'><br>";
echo "<input type='text' name='pin' placeholder='Enter PIN (4 digits)' maxlength='4' minlength='4'>";
echo "<input type='text' name='pinConf' placeholder='Confirm PIN (4 digits)' maxlength='4' minlength='4'><br>";
echo "<input type='submit' name='submit' class='btn btn-success btn-md' value='Add User'>";
echo "</form>";
//End of form

echo "</div>";
echo "<div class='modal-footer'>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

// Execution time
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
            echo "<p id='hideText'>User '$fname $lname' successfully added</p>";
        }else {
            echo "<p id ='hideText'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
    }else {
        echo "Pins do not match";
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <style media="screen">
          form > input[type="text"],
          form > input[type="email"],
          form > input[type="tel"] {
            margin: 10px;
            padding: 10px;
            outline: none;
            border: 1px solid lightgrey;
            border-radius: 5px;
          }
          form > input[type="text"]:focus,
          form > input[type="email"]:focus,
          form > input[type="tel"]:focus {
            border: 1px solid lightblue;
          }
        </style>
    </head>
    <body>
      <script src="../libraries/jquery/dist/jquery.min.js" charset="utf-8"></script>
      <script type="text/javascript">
        $(document).ready( function() {
          $('#hideText').delay(200).fadeOut();
        });
      </script>
    </body>
</html>


<?php
require "../views/sensor.view.php";
require "libs/dbconnect.php";

$conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbname );

if ($conn->connect_error) {
    die ("Error... Can not connect to the database" . $conn->connect_error);
}

############################################################################################

if (isset($_POST["submit"])) {

    $pinff = $_POST["pin"];  //stores value of the form input

    $query = "SELECT * from people where pin ='$pinff'";  // Compares the data entered with the database pin records
    if ($result=mysqli_query($conn,$query))
    {
        if(mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $currentactivity = $row['fname'] . " " . $row['lname'] . " " . date("m-d-Y") . " " . date("h:i:sa");

                $firstName = $row['fname'];
                $lastName = $row['lname'];
                $date = date("m-d-Y");
                $time = date("h:i:sa");


                // Creating record into database

                $sql = "INSERT INTO activity(firstname, lastname, date, time)
                        VALUES('$firstName', '$lastName', '$date', '$time')";

                // Validating record
                if ($conn->query($sql) === TRUE) {
                    echo "<div id='removeText' style='color: green;'> Access granted <br>" . $currentactivity . "</div>";
                }else {
                    echo "<div id='removeText' style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                }
            }
        } else
            echo "<div id='removeText' style='color: red;'> User not recognized </div>";
        }
        else
            echo "Query Failed.";
}

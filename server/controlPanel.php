<?php

require "libs/dbconnect.php";
require "../views/controlPanel.view.php";
require_once "showAllActivity.php";
require_once "createUser.php";

$conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbname );

    if ($conn->connect_error) {
        die ("Error... Can not connect to the database" . $conn->connect_error);
    }

$sql = "SELECT * FROM activity ORDER BY id DESC LIMIT 6";
$result = $conn->query($sql);

echo "<div class='col-md-3'>";
echo "<div class='panel panel-warning'>";
echo "<div class='panel-heading'>Recent activity <button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#showAllActivity'>Show all</button></div>";
echo "<div class='panel-body'>";

if ($result->num_rows > 0 && !$_POST['find']) {
    while ($row = $result->fetch_assoc()) {
        echo "<ul class='list-group'><li class='list-group-item'>" . $row['firstname'] . " " . $row['lastname'] . " | <p style='color: green'>" . $row['date'] . " " . $row['time'] . "</p></li></ul>";
    }
    echo "</div>";
    echo "</div>";
    echo "</div>";
} else {

  echo "<ul class='list-group'>" . "<li class='list-group-item'>No data available</li></ul>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}

//    Show off middle section on the dashboard

    $sql = "SELECT * FROM people";
    $result = $conn->query($sql);

    echo "<div class='col-md-6'>";
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'>Graphs</div>";
    echo "<div class='panel-body'>";

    if ($result->num_rows > 0 && !$_POST['find']) {
        while ($row = $result->fetch_assoc()) {
            echo "<ul class='list-group'>" . "<li class='list-group-item'>" . $row['fname'] . " " . $row['lname'] . " " ."<a href=''>details</a></li></ul>";
    }
    echo "</div>";
    echo "</div>";
    echo "</div>";
} else {

  echo "<ul class='list-group'>" . "<li class='list-group-item'>No data available</li></ul>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}

//    Show off all active people on the system

    $sql = "SELECT * FROM people";
    $result = $conn->query($sql);

    echo "<div class='col-md-3'>";
    echo "<div class='panel panel-success'>";
    echo "<div class='panel-heading'>Active Users</div>";
    echo "<div class='panel-body'>";

    if ($result->num_rows > 0 && !$_POST['find']) {
        while ($row = $result->fetch_assoc()) {
            echo "<ul class='list-group'>" . "<li class='list-group-item'>" . $row['fname'] . " " . $row['lname'] . " " ."<a href=''>details</a></li></ul>";
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {

      echo "<ul class='list-group'>" . "<li class='list-group-item'>No data available</li></ul>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }

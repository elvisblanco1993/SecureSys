<?php

$conn = new mysqli($dbserver, $dbuser, $dbpassword, $dbname );

if ($conn->connect_error) {
    die ("Error... Can not connect to the database" . $conn->connect_error);
}

$sql = "SELECT * FROM activity ORDER BY id DESC";
$result = $conn->query($sql);

echo "<div class='modal fade' id='showAllActivity' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
echo "<div class='modal-dialog' role='document'>";
echo "<div class='modal-content'>";
echo "<div class='modal-header'>";
echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
echo "<h4 class='modal-title' id='myModalLabel'>Recent activity <button type='button' class='btn btn-primary btn-xs'>Save report</button>
</h4>";
echo "</div>";
echo "<div class='modal-body'>";

if ($result->num_rows > 0 && !$_POST['find']) {
    while ($row = $result->fetch_assoc()) {
        echo "<ul class='list-group'><li class='list-group-item'>" . $row['firstname'] . " " . $row['lastname'] . " | <p style='color: green'>" . $row['date'] . " " . $row['time'] . "</p></li></ul>";
    }


    echo "</div>";
    echo "<div class='modal-footer'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
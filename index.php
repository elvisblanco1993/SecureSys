<?php
$dbserverfile = 'server/libs/dbconnect.php';

if (file_exists($dbserverfile)) {
    if (is_readable($dbserverfile)) {
        header("Location: server/controlPanel.php");
    } else  {
        echo "File $dbserverfile exists, but it is not readable. Please verify permissions in the filesystem";
    }
} else  {
    echo "<p style='text-align: center; margin-top: 40px; '>Please click <a href='install.php'>here</a> to begin installation</p>";
}

<?php

$servername = "localhost";
$dbuser = "id6906789_student";
$dbpass = "000webhost";
$database = "id6906789_bookcasedb";

// Create connection
$con = new mysqli($servername, $dbuser, $dbpass, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    echo "connection to db failed";    
}
?>
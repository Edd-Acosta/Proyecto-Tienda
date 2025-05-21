<?php
$servername = "fdb1030.awardspace.net";
$username = "4583275_hospital";
$password = "quesadilla94";
$dbname = "4583275_hospital";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
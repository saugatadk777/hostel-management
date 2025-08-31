<?php
$servername = "localhost";
$username = "root"; // XAMPP default
$password = "";     // XAMPP default
$dbname = "hostel_db"; // create this database in phpMyAdmin

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
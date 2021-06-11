<?php
$servername = "localhost";
$username = "admin";
$password = "Name0413";
$dbname = "Dull_Genius";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// prepare and bind
$stmt = $conn->prepare("INSERT INTO reservation (borrower, studentId, boardgameborrowed, reservationAt) VALUES (?, ?, ?, NOW() )");
$stmt->bind_param("sss", $borrower, $studentId, $boardgameborrowed);
 
// set parameters and execute
$firstname = $_GET['borrower'];
$lastname = $_GET['studentId'];
$email = $_GET['studentId'];
$stmt->execute();


?>
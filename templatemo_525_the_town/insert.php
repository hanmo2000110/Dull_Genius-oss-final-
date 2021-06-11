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
$borrower = $_GET['name_of_borrower'];
$studentId = $_GET['stdid'];
$boardgameborrowed = $_GET['stdid'];
$stmt->execute();
echo $_GET['borrower'];

?>
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'membership_registration';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile_no'];
$dob = $_POST['date_of_birth'];

$stmt = $conn->prepare("INSERT INTO details(name,email) VALUES (?,?)");

if (!$stmt) {
    die('Prepare Failed: ' . $conn->error);
}

$stmt->bind_param("s", $name);

if ($stmt->execute()) {
    echo "Registration Successful";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
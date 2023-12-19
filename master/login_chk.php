<?php
// Start session
session_start();

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input data
$username = $_POST['username'];
$password = $_POST['password'];

// Check user credentials
$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// If credentials are correct, set session variables and redirect to home page
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$_SESSION['username'] = $row['username'];
	header('Location: index.php');
	exit();
} else {
	// If credentials are incorrect, display error message
	$_SESSION['error'] = "Incorrect username or password";
	header('Location: login.php');
	exit();
}

// Close connection
$conn->close();
?>

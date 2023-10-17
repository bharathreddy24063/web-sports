<?php
// Database connection details
$servername = "localhost";
$username = "id20788748_hemanth42079";
$password = "Hemanth@4279";
$dbname = "id20788748_web";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate login credentials
    $sql = "SELECT * FROM sports WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
      header("Location: dash.html");
        exit;
    } else {
        // Login failed
        echo "Login failed. Please check your email and password.";
    }
}

// Close the database connection
$conn->close();
?>

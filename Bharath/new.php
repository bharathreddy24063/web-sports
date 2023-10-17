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

// Retrieve data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into the database
    $sql = "INSERT INTO sports (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the login page upon successful registration
        header("Location: new1.html");
        exit; // Terminate script execution after the redirection
    } else {
        echo "already->",$email,"<-exist ";
    }
}

// Close the database connection
$conn->close();
?>

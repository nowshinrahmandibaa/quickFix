<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo "Email already exists. <a href='signup.php'>Try again</a>";
    } else {
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['user'] = $email;
            header("Location: find-service.php");
            exit();
        } else {
            echo "Error creating account.";
        }
    }
}
?>
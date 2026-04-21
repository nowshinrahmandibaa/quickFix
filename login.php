<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email;
        header("Location: find-service.php");
        exit();
    } else {
        echo "<p style='color:red;text-align:center;'>Invalid email or password. <a href='loginn.php'>Try again</a></p>";
    }
}
?>
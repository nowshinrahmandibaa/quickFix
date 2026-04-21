<?php
session_start();
include("db.php");

if(!isset($_SESSION['user'])){
    echo "not_logged_in";
    exit();
}

$service = $_POST['service'];
$user = $_SESSION['user'];

$sql = "INSERT INTO bookings (service_name, user_email) VALUES ('$service', '$user')";
if($conn->query($sql) === TRUE){
    echo "success";
} else {
    echo "error";
}
?>
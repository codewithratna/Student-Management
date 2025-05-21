<?php

/*
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO students (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
    echo "Connection successful";
} else {
    echo "connection failed check again";
}
?>
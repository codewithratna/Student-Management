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
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_student_management";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
    echo "Connection successful";
} else {
    echo "connection failed check again";
}*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_student_management";
$is_connect = false;


$connection = mysqli_connect($servername, $username, $password, $dbname);
 
require_once './config.php';

if ($connection) {
    $is_connect = true;
}else {
    echo "Connected";
}
$name = $_POST['name'];
$email = $_POST['e-mail'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$address = $_POST['address'];
$image = $_FILES['image'];


if( !empty($image) ){ 
    $imagePathName = "uploads/" . basename($image["name"]);
    // Move file to target directory
    if (move_uploaded_file($image["tmp_name"], $imagePathName)) {
        echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
    }
}

if ($is_connect){
    $sql = "INSERT INTO `students`( `Name`, `e-mail`, `image`, `Phone`, `Address`) VALUES ('$name', '$email', '$imagePathName', '$phone', '$address')";
if ($connection->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>

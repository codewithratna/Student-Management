<?php
/*include './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $email = $_POST['e-mail'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    
    if ($connection->query($sql) === TRUE) {
        header("Location: index.php?msg=updated");
        exit;
    } else {
        echo "Error updating record: " . $connection->error;
    }
} else {
    echo "Invalid request.";
}*/



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";
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
 

if ($is_connect)

    $sql = "UPDATE students 
    
    SET UPDATE `students` SET `ID`='[value-1]',`Name`='[value-2]',`e-mail`='[value-3]',`Phone`='[value-4]',`Address`='[value-5]' WHERE $ID";

     if ($connection->query($sql) === TRUE) {
    header("index.php")
     } else {
        echo "Error: " . $sql . "<br>" . $connection->error;

     }
    




?>
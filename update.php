<?php
include 'config.php';

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
}
?>
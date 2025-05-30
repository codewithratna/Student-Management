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
$dbname = "assignment_student_management";
$is_connect = false;


$connection = mysqli_connect($servername, $username, $password, $dbname);
 
require_once './config.php';




if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($connection, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Student not found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}

if ($connection) {
    $is_connect = true;
}else {
    echo "Connected";
}
$name         = $_POST['name'];
$email        = $_POST['e-mail'];
$phone        = $_POST['phone'];
$address      = $_POST['address'];
$image        = $_FILES['image'];

$oldImagePath = $row['image'];

if( !empty($image) ){ 
    $imagePathName = "uploads/" . basename($image["name"]);

    if( file_exists( $oldImagePath ) ) {
        unlink( $oldImagePath );
    }

    // Move file to target directory
    if (move_uploaded_file($image["tmp_name"], $imagePathName)) {
        echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
    }
}

if ($is_connect) {
    $id = $_POST['id'];
    $sql = "UPDATE students SET `Name`='$name', `e-mail`='$email', `image`='$imagePathName', `Phone`='$phone', `Address`='$address' WHERE ID='$id'";

    if ($connection->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}



?>

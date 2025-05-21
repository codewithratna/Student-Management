<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        Name: <input type="text" name="name" value="<?= $row['name'] ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= $row['email'] ?>" required><br><br>
        Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>" required><br><br>
        Address: <textarea name="address" required><?= $row['address'] ?></textarea><br><br>
        <input type="submit" value="Update Student">
    </form>
    <br><a href="index.php">Back to List</a>
</body>
</html>
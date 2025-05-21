<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Add Student</h2>
    <form action="store.php" method="POST">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Phone: <input type="text" name="phone" required><br>
        Address: <textarea name="address" required></textarea><br>
        <input type="submit" value="Add Student">
    </form>
    <br><a href="index.php">Back to List</a>
</div>
</body>
</html>
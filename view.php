

<!DOCTYPE html>
<html>
<head>
    <title>View Student</title>
    <link rel="stylesheet" href="style.css">

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_student_management";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

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
?>
  
</head>
<body>

<div class="container">
    <h2>Student Details</h2>

    <table class="details-table">
        <tr>
            <td>Name</td>
            <td><?= htmlspecialchars($row['Name']) ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= htmlspecialchars($row['e-mail']) ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?= htmlspecialchars($row['Phone']) ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?= htmlspecialchars($row['Address']) ?></td>
        </tr>
        <tr>
            <td>Image</td>
            <td>
                <img width="300px" height="300px" style="object-fit:conver;" src="<?php echo $row['image'] ?>" alt="">
            </td>
        </tr>
    </table>

    <a href="index.php" class="back-button">← Back to List</a>
</div>

</body>
</html>

 <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .details-table {
            width: 100%;
            border: none;
        }

        .details-table td {
            padding: 10px 0;
            border: none;
            text-align: left;
        }

        .details-table td:first-child {
            font-weight: bold;
            width: 30%;
            color: #555;
            vertical-align: top;
            text-align: left;
        }

        .details-table td:last-child {
            color: #222;
        }

        .back-button {
            display: block;
            width: 160px;
            margin: 30px auto 0;
            text-align: center;
            padding: 10px 20px;
            background-color: #6c63ff;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #5548ee;
        }
    </style>
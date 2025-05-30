<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_student_management";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE ID = $id";
    $result = mysqli_query($connection, $sql);
    $student = mysqli_fetch_assoc($result);
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <h2 class="page-title">Edit Student</h2>

    <form action="./update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $student['ID'] ?>">

        <div class="formbold-input-flex">
          <div>
              <label for="name" class="formbold-form-label"> Name </label>
              <input
              type="text"
              name="name"
              id="name"
              value="<?= $student['Name'] ?>"
              class="formbold-form-input"
              />
          </div>
           <div>
              <label for="e-mail" class="formbold-form-label"> Mail </label>
              <input
              type="email"
              name="e-mail"
              id="email"
              value="<?= $student['e-mail'] ?>"
              class="formbold-form-input"
              />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
              <label for="phone" class="formbold-form-label"> Phone </label>
              <input
              type="text"
              name="phone"
              id="phone"
              value="<?= $student['Phone'] ?>"
              class="formbold-form-input"
              />
          </div>

          <div>
              <label for="address" class="formbold-form-label"> Address </label>
              <input
              type="text"
              name="address"
              id="address"
              value="<?= $student['Address'] ?>"
              class="formbold-form-input"
              />
          </div>
        </div>
        <div>
            <div>
                Previous Image
                <img width="100" src="<?php echo $student['image'] ?>"/>
            </div>
            <label for="image" class="formbold-form-label"> Image </label>
            <input
                type="file"
                name="image"
                id="image"
                placeholder="Image"
                class="formbold-form-input"
              />
          </div>
        <button class="formbold-btn" type="submit">
            Update Student
        </button>
    </form>
  </div>
</div>

</body>
</html>
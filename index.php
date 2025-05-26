
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="./style.css">

          <?php include 'config.php';?>
        </head>
        <body>

        <div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->

  <div class="top-bar">
    <h2 class="page-title">All Registered Students</h2>
    <a href="create.php" class="add-btn">+ Add New Student</a>


</div>
  
           <table>

           <tr><th>ID</th><th>Name</th><th>E-mail</th><th>Phone</th><th>Address</th><th>Action</th></tr>
          <?php while($row = $result->fetch_assoc()): ?>
          
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['e-mail'] ?></td>
                <td><?= $row['Phone'] ?></td>
                <td><?= $row['Address'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $row['ID']?>" class="view-btn">View</a>
                    <a href="edit.php?id=<?= $row['ID']?>" class="edit-btn">Edit</a>
                    <a href="delete.php?id=<?php echo $row['ID']?>" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </table>
        </body>
        </html>


       




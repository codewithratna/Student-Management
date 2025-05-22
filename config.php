<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";
$is_connect = false;


$connection = mysqli_connect($servername, $username, $password, $dbname);


        if($is_connect){
             $sql = "SELECT * FROM `students`";
             $result = $connection->query($sql);

             echo "<pre>";

             print_r($get_data);
             die();

      if($connection->query($sql));
        }
   



$sql = "SELECT * FROM students";
$result = $connection->query($sql);

?>


<?php
include 'config.php';

$id = $_GET['id'];

$connection->query("DELETE FROM students WHERE id=$id");
header("Location: index.php");

?>
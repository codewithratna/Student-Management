<?php

require_once './config.php';

$id = $_GET['id'];

$sql = "DELETE from students WHERE id = $id";

if ($connection->query($sql) === true) {

    header(location:'index.php');
}else {
    print_r($connection->error);
    die();
}
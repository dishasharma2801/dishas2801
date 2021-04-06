<?php
include("db.php");
// print_r($_POST);
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];

$c = sha1($c);

$d = $_POST['address'];

$que = "INSERT INTO test (name, email, password, address) VALUES ('$a', '$b', '$c', '$d')";

mysqli_query($con, $que);

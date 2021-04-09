<?php
include("db.php");
 //print_r($_POST);

$NAME= $_POST['name'];
$EMAIL = $_POST['email'];
$PASS = $_POST['password'];

$PASS= sha1($PASS);

$ADD= $_POST['address'];

$que = "INSERT INTO company_survey(name, email, password, address) VALUES ('$NAME', '$EMAIL', '$PASS', '$ADD')";

mysqli_query($con, $que);
header("location:login.php");
?>
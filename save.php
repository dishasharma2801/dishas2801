<?php
include("db.php");
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
unset($_SESSION['reg_data']);
$_SESSION['reg_data'] = $_POST;
$_SESSION['reg_error'] = 0;

 //print_r($_POST); die;
if(empty($name)){
  $_SESSION['reg_error'] = 1;
  $_SESSION['error_msg']['name'] = "Name is required";
}

if(empty($email)){
  $_SESSION['login_error'] = 1;
  $_SESSION['error_msg']['email'] = "Email is required";
}
 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email =($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

if(empty($password)){
  $_SESSION['reg_error'] = 1;
  $_SESSION['error_msg']['password'] = "Password is required";
}else{
	$pass = sha1($pass);
}


if(isset($_SESSION['reg_error']) && $_SESSION['reg_error'] == 1){
  return header("location:company_survey.php");
}  

$name= $_POST['name'];
$email= $_POST['email'];
$pass = $_POST['password'];

$pass= sha1($pass);

$add= $_POST['address'];

$query = "INSERT INTO company_survey(name, email, password, address) VALUES ('$name', '$email', '$pass', '$add')";

mysqli_query($connection,$query);
header("location:company_survey.php");
?>
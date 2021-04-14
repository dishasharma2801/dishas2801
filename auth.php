<?php
include('db.php');
// print_r($_POST);
$email = $_POST['email'];
$pass = $_POST['password'];
unset($_SESSION['login_data']);
$_SESSION['login_data'] = $_POST;
$_SESSION['login_error'] = 0;

// print_r($_POST); die;
if(empty($email)){
	$_SESSION['login_error'] = 1;
	$_SESSION['error_msg']['email'] = "Email is required";
}

if(empty($pass)){
	$_SESSION['login_error'] = 1;
	$_SESSION['error_msg']['password'] = "Password is required";
}else{
	$pass = sha1($pass);
}

if(isset($_SESSION['login_error']) && $_SESSION['login_error'] == 1){
	return header("location:login.php");
}

$query = "SELECT * FROM company_survey WHERE email='$email'";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result)==1)
{
	unset($_SESSION['login_data']);
	$data = mysqli_fetch_assoc($result);

	
	if($data['password'] == $pass)
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['name'];
		$_SESSION['is_user_logged_in']=true;
		header("location:profile.php");

	}
	else
	{
		//When password is incorrect
		$_SESSION['msg']="This Password is Incorrect";
		header("location:login.php");
	}

}
else
{
	//when email & password both are incorrect
	$_SESSION['msg']="This Email and Password is Incorrect";
	header("location:login.php");
}

?>
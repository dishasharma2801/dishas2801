<?php
include('db.php');
// print_r($_POST);
$EMAIL = $_POST['email'];
$PASS = $_POST['password'];
$PASS = sha1($PASS);

$que = "SELECT * FROM company_survey WHERE email='$EMAIL'";

$result = mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	
	if($data['password'] == $PASS)
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['name'];
		$_SESSION['is_user_logged_in']=true;
		header("location:profile.php");

	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect";
		header("location:login.php");
	}

}
else
{
	$_SESSION['msg']="This Username and Password is Incorrect";
	header("location:login.php");
}

?>
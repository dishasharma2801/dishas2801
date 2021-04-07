<?php
include('db.php');
// print_r($_POST);
$e = $_POST['email'];
$p = $_POST['password'];
$p = sha1($p);

$que = "SELECT * FROM test WHERE email='$e'";
$result = mysqli_query($con, $que);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	if($data['password'] == $p)
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
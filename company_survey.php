<?php
include("db.php");
include('header.php');
?>
<style>
  .error {color: #ff0000}
</style>
<div class="container mt-4" style="min-height: 600px;">
	<h2 class="text-center">
		User Registration
	</h2>
  <?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = $addressErr = "";
$name = $email = $password = $address = "";
?>
	<div class="card">
			<div class="card-header">
				<h4>Signup</h4>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Full Name</label>
					<input name="name" type="text" name="name" id="name" placeholder="fullname" class="form-control">
				 <?php 
          if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  
  }
  ?>
        	<span class="error">* <?php echo $nameErr;?></span>
 
					<small class="text-danger" id="name_msg"></small>

				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" id="email" placeholder="email" class="form-control">
          <?php  if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            } else {
           $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
           }?>
      <span class="error">* <?php echo $emailErr;?></span>
    
					<small class="text-danger" id="email_msg"></small>

				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" id="pass" class="form-control">

				</div>
				<div class="form-group">
					<label>Re-Password</label>
					<input type="password" name="re-pass" id="re-pass" class="form-control">

					<small class="text-danger" id="re_pass_msg"></small>

				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" id="add" name="add" placeholder="address"></textarea>
					<small class="text-danger" id="add_msg"></small>

				</div>
			</div>
			<div class="card-footer">
				<input type="submit" value="submit" class="btn btn-success">

<div>
    </div>
  </form>
  </div>
</div>
 <?php
 // to see input
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $address;
?>

</body>
</html>
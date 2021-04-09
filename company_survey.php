<?php
include("db.php");
include('header.php');
?>
<?php
   
    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM  company_survey WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(email,password,email) VALUES (email:,:password_hash,:email)");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Your registration was successful!</p>';
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>

<script>
	$(document).ready(function(){

$("#submit_btn").click(function(){

  var a=$("#full_name").val();
  var b=$("#email").val();
  var c=$("#pass").val();
  var d=$("#re_pass").val();
  var e=$("#add").val();
  

  var check = true;

  if (a=="")
   {
   	check = false;
  	$("#full_name_msg").html("Insert Your Full Name");
  	$("#full_name").addClass("form-error");
  }
  else
  {
  	$("#full_name_msg").html("");
  	$("#full_name").removeClass("form-error");
  }
  if (b=="")
   {
   	check = false;
  	$("#email_msg").html("Insert Your Email");
  	$("#email").addClass("form-error");
  }
  else
  {
  	$("#email_msg").html("");
	
if(reg.test(b)==false)
    {
    	check = false;
     $("email_msg").html("Email Id Is Not Correct");
   }
  else
   {
      $("email_msg").html("");
      $("#email").removeClass("form-error");
     }

  }
  if (c=="")
   {
   	check = false;
  	$("#pass_msg").html("Insert Your Password");
  	$("#pass").addClass("form-error");
  }
  else
  {
  	$("#pass_msg").html("");
  	$("#pass").removeClass("form-error");
  }
  if (d=="")
   {
   	check = false;
  	$("#re_pass_msg").html("Insert Your Re-Password");
  	$("#re_pass").addClass("form-error");
  }
  else
  {
  	$("#re_pass_msg").html("");}
  	

if (c !=d) 
 {
 	check = false;
 $("#re_pass_msg").html(" Insert Correct Re-Password");
 
}
else
{
	$("#re_pass_msg").html("");
	$("#re_pass").removeClass("form-error");
}



  }
  if (e=="")
   {
   	check = false;
  	$("#add_msg").html("Insert Your Address");
  	$("#add").addClass("form-error");
  }
  else
  {
  	$("#add_msg").html("");
  	$("#add").removeClass("form-error");
  }



  }

 
});
</script>

  
<div class="container mt-4" style="min-height: 600px;">
	<h2 class="text-center">
		User Registration
	</h2>
	<div class="col-md-4 offset-md-4">

		<form action="save.php" method="post">

		<div class="card">
			<div class="card-header">
				<h4>Signup</h4>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Full Name</label>
					<input name="name" type="text" name="name" id="name" placeholder="fullname" class="form-control">
					
					<small class="text-danger" id="name_msg"></small>

				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" id="email" placeholder="email" class="form-control">

					<small class="text-danger" id="email_msg"></small>

				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" id="pass" class="form-control">

					<small class="text-danger" id="pass_msg"></small>

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
			</div>
		</div>
	</form>
	</div>
</div>

</body>
</html>
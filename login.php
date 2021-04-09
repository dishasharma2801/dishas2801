<?php
include("db.php");
?>
<div class="container mt-4" style="min-height: 600px;">
	<h2 class="text-center">
		User Login
	</h2>
	<div class="col-md-4 offset-md-4">
		<form action="auth.php" method="post">
		<div class="card">
			<div class="card-header">
				<h4>Login</h4>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password">
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" value="Login" class="btn btn-success">
				<p class="text-danger text-center">
					<?php
					if(isset($_SESSION['msg']))
					{
						echo $_SESSION['msg'];
						session_destroy();
					}

					?>
					<?php
   
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM company_survey WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<p class="error">email password is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                echo '<p class="success">Congratulations, you are logged in!</p>';
            } else {
                echo '<p class="error">email password  is wrong!</p>';
            }
        }
    }
?>
				</p>
			</div>
		</div>
		</form>
	</div>
</div>



</body>
</html>
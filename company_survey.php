<?php
include("db.php");

?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<a href="#" class="navbar-brand">TSS</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div id="menu" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>

			<?php
			if(isset($_SESSION['is_user_logged_in']))
			{ ?>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			<?php
			}
			else
			{ ?>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Signup</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
			<?php
			}
			?>




			
		</ul>
	</div>
</nav>

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
					<input name="name" type="text" class="form-control">
				</div>

				<div class="form-group">
					<label>Username</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Re-Password</label>
					<input type="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address"></textarea>
				</div>
			</div>
			<div class="card-footer">
				<input type="submit" value="Login" class="btn btn-success">
			</div>
		</div>
	</form>
	</div>
</div>



</body>
</html>
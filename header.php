<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="/Disha/css/bootstrap.css">
<script type="text/javascript" src="/Disha/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/Disha/js/bootstrap.js"></script>
</head>
<body>s
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a href="#" class="navbar-brand">xyz</a>
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
					<a class="nav-link" href="company_survey.php">Signup</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
			<?php
			}
			?>

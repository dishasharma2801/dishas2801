<?php
   include("db.php");
   include("header.php");
 ?>
<div class="card-footer">
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
               <label>Email</label>
               <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['login_data']['email'] ?? ''; ?>">
               <small class="text-danger">
	               <?php 
	               		if(isset($_SESSION['login_error']) && $_SESSION['login_error'] == 1){
	               			if(isset($_SESSION['error_msg']['email'])){
	               				echo $_SESSION['error_msg']['email'];
	               				unset($_SESSION['error_msg']['email']);
	               			}
	               		}
	               ?>
               </small>
            </div>
            <div class="form-group">
               <label>Password</label>
               <input type="text" class="form-control" name="password">
               <small class="text-danger">
	               <?php 
	               		if(isset($_SESSION['login_error']) && $_SESSION['login_error'] == 1){
	               			if(isset($_SESSION['error_msg']['password'])){
	               				echo $_SESSION['error_msg']['password'];
	               				unset($_SESSION['error_msg']['password']);
	               			}
	               		}
	               ?>
	            </small>
            </div>
            <div class="card-footer">
               <input type="submit" value="Login" class="btn btn-success">
               <p class="text-danger text-center"></p>
            </div>
         </div>
   </form>
   </div>
</div>
</body>
</html>
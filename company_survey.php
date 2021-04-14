<?php
   include("db.php");
   include('header.php');
 ?>

<div class="container mt-4" style="min-height: 600px;">
   <h2 class="text-center">
      User Registration
   </h2>
   <form action="save.php" method="post">
   <div class="card">
      <div class="card-header">
         <h4>Signup</h4>
      </div>
      <div class="card-body">
         <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" id="name" placeholder="fullname" class="form-control">
            <small class="text-danger">
                 <?php 
                    if(isset($_SESSION['reg_error']) && $_SESSION['reg_error'] == 1){
                      if(isset($_SESSION['error_msg']['name'])){
                       echo $_SESSION['error_msg']['name'];
                        unset($_SESSION['error_msg']['name']);
                      }
                    }
                 ?>
             </small>
         </div>
         <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="email" class="form-control""<?php echo $_SESSION['reg_data']['email'] ?? ''; ?>">
           <small class="text-danger">
                 <?php 
                    if(isset($_SESSION['reg_error']) && $_SESSION['reg_error'] == 1){
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
            <input type="password" name="pass" id="pass" placeholder="password" class="form-control">
              
            <small class="text-danger">
                 <?php 
                    if(isset($_SESSION['reg_error']) && $_SESSION['reg_error'] == 1){
                      if(isset($_SESSION['error_msg']['password'])){
                        echo $_SESSION['error_msg']['password'];
                        unset($_SESSION['error_msg']['password']);
                      }
                    }
                 ?>
           </small>

         </div>
         <div class="form-group">
            <label>Re-Password</label>
            <input type="password" name="repass" id="repass" placeholder="repassword" class="form-control">
        

         </div>
         <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" id="add" name="add" placeholder="address"></textarea>
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
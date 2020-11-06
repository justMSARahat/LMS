<?php
  include "inc/db.php";
  session_start();
  ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label for="remember">
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php 
        if (isset($_POST['login'])) {
          $u_email    = mysqli_real_escape_string( $db , $_POST['email'] );
          $u_pass     = mysqli_real_escape_string( $db , $_POST['password'] );
          
          $password   = sha1($u_pass);

          $read_user  = "SELECT * FROM user WHERE user_email = '$u_email' ";
          $send_user  = mysqli_query($db , $read_user);
          while ($row = mysqli_fetch_assoc($send_user) ) {
            $_SESSION['user_id']        = $row['user_id']; 
            $_SESSION['user_image']     = $row['user_image'];  
            $_SESSION['user_name']      = $row['user_name']; 
            $_SESSION['user_email']     = $row['user_email'];  
            $_SESSION['user_password']  = $row['user_password']; 
            $_SESSION['user_phone']     = $row['user_phone'];  
            $_SESSION['user_address']   = $row['user_address'];  
            $_SESSION['user_role']      = $row['user_role'];
            $_SESSION['user_status']    = $row['user_status'];
            $_SESSION['user_gender']    = $row['user_gender'];
            $_SESSION['user_join_date'] = $row['user_join_date'];  
          
          if ( $u_email == $_SESSION['user_email'] && $password == $_SESSION['user_password'] ) {
            header("location: main.php");
            }
          else{
            header("location: index.php");
            }
          }//while end
        } //main if close
      ?>

      <p class="mb-1">
        <a href="resetpass.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<?php
  ob_end_flush();
?>
</body>
</html>

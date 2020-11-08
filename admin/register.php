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
  <title>AdminLTE 3 | Registration Page</title>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="POST" enctype="multipart/form-data">
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="repass" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Phone Number" name="phone" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Address" name="address" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <select name="gender" id="" class="form-control">
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="file" class="form-control-files" placeholder="Profile Picture" name="image" required="required">
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="sbm" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>

      </form>

      <?php
        if (isset($_POST['sbm'])) {
          $name     = $_POST['name'];
          $email    = $_POST['email'];
          $pass     = $_POST['pass'];
          $repass   = $_POST['repass'];
          $phone    = $_POST['phone'];
          $address  = $_POST['address'];
          $gender   = $_POST['gender'];
          //image preparing
          $imagename    = $_FILES['image']['name'];
          $imagetype    = $_FILES['image']['type'];
          $imagesize    = $_FILES['image']['size'];
          $imagetemp    = $_FILES['image']['tmp_name'];
          //extension
          $supportedext = array("jpg","jpeg","png");
          $nameexplode  = strtolower(end(explode('.', $imagename) ) );
          //form error
          $error = array();
          if ( $name > 4) {
            $error = "User Name is Too Short";
          }
          if ( $pass != $repass) {
            $error = "Password Dose Not Match";
          }
          if (empty($error)) {

            $img_name = rand(1, 99999).'_'.$imagename;
            move_uploaded_file($imagetemp, "img/user/$img_name");

            $sha1= sha1($pass);

            $sql = "INSERT INTO user (user_image,user_name,user_email,user_password,user_phone,user_address,user_role,user_status,user_gender,user_join_date) VALUES ('$img_name','$name','$email','$sha1','$phone','$address',0,3,'$gender',now())";
            $query = mysqli_query($db , $sql);
            if ($query) {
              header("location:index.php");
            }else{
              die("Failed to add user ". mysqli_error($db) );
            }
          }
        } //isset if close
      ?>

      <a href="index.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

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

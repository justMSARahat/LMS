<!-- Header Connection -->
<?php include "inc/header.php"; ?>
<!-- Header Connection -->


<!-- nav Connection -->
<?php include "inc/nav.php"; ?>
<!-- nav Connection -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">Login</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="index-2.html">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Login</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START LOGIN AREA
================================= -->

<?php 
    if ( empty($_SESSION['users_email']) || empty($_SESSION['users_password']) || $_SESSION['users_status'] != 1 ) { ?> 
        <section class="login-area section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="card-box-shared">
                            <div class="card-box-shared-title text-center">
                                <h3 class="widget-title font-size-25">Login to Your Account!</h3>
                            </div>
                            <div class="card-box-shared-body">
                                <div class="contact-form-action">

                                    <form method="POST" action="">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="email" placeholder="Email, or username">
                                                        <span class="la la-envelope input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-md-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Password<span class="primary-color-2 ml-1">*</span></label>
                                                    <div class="form-group">
                                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                                        <span class="la la-lock input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-md-12 -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="custom-checkbox d-flex justify-content-between">
                                                        <input type="checkbox" id="chb1">
                                                        <label for="chb1">Remember Me</label>
                                                        <a href="recover.html" class="primary-color-2"> Forgot my password?</a>
                                                    </div>
                                                </div>
                                            </div><!-- end col-md-12 -->
                                            <div class="col-lg-12 ">
                                                <div class="btn-box">
                                                    <button class="theme-btn" type="submit" name="login">login account</button>
                                                </div>
                                            </div><!-- end col-md-12 -->
                                            <div class="col-lg-12">
                                                <p class="mt-4">Don't have an account? <a href="sign-up.html" class="primary-color-2">Register</a></p>
                                            </div><!-- end col-md-12 -->
                                        </div><!-- end row -->
                                    </form>
                                    <?php 
                                        if (isset($_POST['login'])) {
                                          $u_email    = mysqli_real_escape_string( $db , $_POST['email'] );
                                          $u_pass     = mysqli_real_escape_string( $db , $_POST['password'] );
                                          
                                          $password   = sha1($u_pass);

                                          $read_user  = "SELECT * FROM users WHERE users_email = '$u_email' ";
                                          $send_user  = mysqli_query($db , $read_user);
                                          while ($row = mysqli_fetch_assoc($send_user) ) {
                                            $_SESSION['users_id']        = $row['users_id']; 
                                            $_SESSION['users_name']      = $row['users_name']; 
                                            $_SESSION['users_email']     = $row['users_email'];  
                                            $_SESSION['users_password']  = $row['users_password']; 
                                            $_SESSION['users_phone']     = $row['users_phone'];  
                                            $_SESSION['users_address']   = $row['users_address'];  
                                            $_SESSION['users_status']    = $row['users_status'];
                                            $_SESSION['users_gender']    = $row['users_gender'];
                                            $_SESSION['users_image']     = $row['users_image'];  
                                            $_SESSION['users_joindate']  = $row['users_joindate'];  
                                          
                                          if ( $u_email == $_SESSION['users_email'] && $password == $_SESSION['users_password'] ) {
                                            header("location: dashboard.php");
                                            }
                                          else{
                                            header("location: index.php");
                                            }
                                          }//while end
                                        } //main if close
                                      ?>
                                </div><!-- end contact-form -->
                            </div>
                        </div>
                    </div><!-- end col-lg-7 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
    <?php }
    else{
        header("Location:dashboard.php");
    }
?>
<!-- footer Connection -->
<?php include"inc/footer.php"; ?>
<!-- footer Connection -->

<!-- Script Connection -->
<?php include"inc/script.php"; ?>
<!-- Script Connection -->
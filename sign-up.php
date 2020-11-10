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
                        <h2 class="section__title">Sign Up</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="index-2.html">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Sign Up</li>
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
       START SIGN UP AREA
================================= -->
<section class="sign-up section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card-box-shared">
                    <div class="card-box-shared-title text-center">
                        <h3 class="widget-title font-size-25">Create an Account and <br> Start Learning!</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="contact-form-action">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row">
                                  
                                    <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="users_name" placeholder="Name" required="required">
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="email" name="users_email" placeholder="Email" required="required">
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                     <div class="col-lg-12 ">
                                        <div class="input-box">
                                            <label class="label-text">Phone<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="users_phone" placeholder="Phone" required="required">
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Password<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="users_password" placeholder="Password" required="required">
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Confirm Password<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="users_repassword" placeholder="Confirm password" required="required">
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Address<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="users_addrfess" placeholder="Address" required="required">
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Gender<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <select name="users_gender" id="" class="form-control">
                                                    <option value="">Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Profile Picture<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input class="form-control-files" type="file" name="image" placeholder="Address">
                                            </div>
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    
                                    <div class="col-lg-12 ">
                                        <div class="btn-box">
                                            <input type="submit" name="submit" value="Register" class="theme-btn">
                                        </div>
                                    </div><!-- end col-md-12 -->
                                    <div class="col-lg-12">
                                        <p class="mt-4">Already have an account? <a href="login.html" class="primary-color-2">Log in</a></p>
                                    </div><!-- end col-md-12 -->
                                </div><!-- end row -->
                            </form>

                              <?php
                                if (isset($_POST['submit'])) {
                                  $users_name       = mysqli_real_escape_string( $db, $_POST['users_name'] ) ;
                                  $users_email      = mysqli_real_escape_string( $db, $_POST['users_email'] ) ;
                                  $users_password   = mysqli_real_escape_string( $db, $_POST['users_password'] ) ;
                                  $users_repassword = mysqli_real_escape_string( $db, $_POST['users_password'] ) ;
                                  $users_phone      = mysqli_real_escape_string( $db, $_POST['users_phone'] ) ;
                                  $users_addrfess   = mysqli_real_escape_string( $db, $_POST['users_addrfess'] ) ;
                                  $users_gender     = mysqli_real_escape_string( $db, $_POST['users_gender'] ) ;
                                  //image preparing
                                  $imagename    = $_FILES['image']['name'];
                                  $imagetype    = $_FILES['image']['type'];
                                  $imagesize    = $_FILES['image']['size'];
                                  $imagetemp    = $_FILES['image']['tmp_name'];
                                  //extension
                                  $exploded = explode('.', $imagename);
                                  $last_element = end($exploded);
                                  $imageExtention = strtolower($last_element);
                                  $supportedext = array("jpg","jpeg","png");

                                  //form error
                                  $error = array();
                                  if ( strlen($users_name) < 4) {
                                    $error = "User Name is Too Short";
                                  }
                                  if ( $users_password != $users_repassword) {
                                    $error = "Password Dose Not Match";
                                  }
                                  if (empty($error)) {

                                    $img_name = rand(1, 99999).'_'.$imagename;
                                    move_uploaded_file($imagetemp, "admin/img/user/$img_name");

                                    $sha1= sha1($users_password);

                                    $sha1= sha1($users_password);
                                    $sql = "INSERT INTO users (users_name,users_email,users_password,users_phone,users_addrfess,users_status,users_gender,users_image,users_joindate) VALUES ('$users_name','$users_email','$sha1','$users_phone','$users_addrfess',1,'$users_gender','$img_name',now() ) ";
                                    $query = mysqli_query($db , $sql);
                                     if ($query) {
                                       header("location:login.php");
                                     }else{
                                       die("Failed to Register ". mysqli_error($db) );
                                       echo "<div class='alert alert-warning'>". $error  ."</div>";
                                     }
                                  }
                                } //isset if close
                              ?> 

                        </div><!-- end contact-form -->
                    </div>
                </div>
            </div><!-- end col-md-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end sign-up -->
<!-- ================================
       START SIGN UP AREA
================================= -->

<!-- footer Connection -->
<?php include"inc/footer.php"; ?>
<!-- footer Connection -->

<!-- Script Connection -->
<?php include"inc/script.php"; ?>
<!-- Script Connection -->


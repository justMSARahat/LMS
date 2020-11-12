 <!-- Header Connection -->
<?php include "inc/header.php"; ?>
<!-- Header Connection -->


<!-- nav Connection -->
<?php include "inc/nav.php"; ?>
<!-- nav Connection -->


<?php 
    if ( empty($_SESSION['users_email']) || empty($_SESSION['users_password']) || $_SESSION['users_status'] != 1 ) { 
        header("location:login.php");

      } else if( !empty($_SESSION['users_email']) || !empty($_SESSION['users_password']) || $_SESSION['users_status'] = 1 ) { ?>

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
     <!-- dash Connection -->
    <?php include "inc/dash.php"; ?>
    <!-- dash Connection -->
    
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
           
            <?php include "inc/dashheader.php"; ?>


            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-block"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Settings</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">Settings info</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="section-tab section-tab-2">
                                <ul class="nav nav-tabs" role="tablist" id="review">
                                    <li role="presentation">
                                        <a href="#profile" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                            Profile
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#password" role="tab" data-toggle="tab" aria-selected="false">
                                             Password
                                        </a>
                                    </li>
                                </ul>
                            </div>
                                <?php 
                                    $aut_id = $_SESSION['users_id'];
                                    $sql    = "SELECT * FROM users WHERE users_id = '$aut_id' ";
                                    $send   = mysqli_query($db , $sql);
                                      while ($row = mysqli_fetch_assoc($send) ) {
                                        $id       = $row['users_id']; 
                                        $name     = $row['users_name']; 
                                        $email    = $row['users_email'];  
                                        $password = $row['users_password']; 
                                        $phone    = $row['users_phone'];  
                                        $address  = $row['users_addrfess'];  
                                        $status   = $row['users_status'];
                                        $gender   = $row['users_gender'];
                                        $image    = $row['users_image'];  
                                        $joindate = $row['users_joindate'];  
                                 ?>
                            <div class="dashboard-tab-content mt-5">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active show" id="profile">
                                        <div class="user-form">
                                            <div class="user-profile-action-wrap mb-5">
                                                <h3 class="widget-title font-size-18 padding-bottom-40px">Profile Settings</h3>
                                                <div class="user-profile-action d-flex align-items-center">
                                                    <div class="user-pro-img">
                                                        <img src="admin/img/user/<?php echo $image; ?>" alt="user-image" class="img-fluid radius-round border">
                                                    </div>
                                                </div><!-- end user-profile-action -->
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">

                                                <form method="POST" action="">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
                                                                    <span class="la la-user input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                                                                    <span class="la la-user input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Phone<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="phone" value="<?php echo $phone; ?>">
                                                                    <span class="la la-user input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Address<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" name="address" value="<?php echo $address; ?>">
                                                                    <span class="la la-envelope input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="input-box">
                                                                <label class="label-text">Gender<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <select name="gender" id="" class="form-control">
                                                                        <option value="1" <?php if($gender==1){echo "selected";} ?> >Male</option>
                                                                        <option value="2" <?php if($gender==2){echo "selected";} ?> >Female</option>
                                                                        <option value="3" <?php if($gender==3){echo "selected";} ?> >Other</option>
                                                                    </select>
                                                                    <span class="la la-phone input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-6 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit" name="submit">save changes</button>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                                <?php 
                                                    if (isset($_POST['submit'])) {
                                                        $name    = $_POST['name'];
                                                        $email   = $_POST['email'];
                                                        $phone   = $_POST['phone'];
                                                        $address = $_POST['address'];
                                                        $gender  = $_POST['gender'];
                                                        $upsql   = "UPDATE users SET users_name='$name',users_email='$email',users_phone='$phone',users_addrfess='$address',users_gender='$gender' WHERE users_id = '$aut_id' ";
                                                        $upquery = mysqli_query($db , $upsql);
                                                        if ($upquery) {
                                                            header("location:dashboard-settings.php");
                                                        }else{
                                                            die("Failed Update " . mysqli_error($db) );
                                                        }
                                                    }
                                                 ?>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane-->
                                    <div role="tabpanel" class="tab-pane fade" id="password">
                                        <div class="user-form padding-bottom-60px">
                                            <div class="user-profile-action-wrap">
                                                <h3 class="widget-title font-size-18 padding-bottom-40px">Change Password</h3>
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">
                                                <form method="POST" action="">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Old Password<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="password" name="old" placeholder="Old password">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">New Password<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="password" name="new" placeholder="New password">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">Confirm New Password<span class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="password" name="new2" placeholder="Confirm new password">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <button class="theme-btn" type="submit" name="update">Change password</button>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                                <?php 
                                                    if (isset($_POST['submit'])) {
                                                        $pass1   = $_POST['old'];
                                                        $pass2   = $_POST['new'];
                                                        $pass3   = $_POST['new2'];
                                                        if ( $pass2 == $pass3) {
                                                            $password = sha1($pass2);
                                                            if ($pass1 == $password) {
                                                                $upsql   = "UPDATE users SET users_password='$password' WHERE users_id = '$aut_id' ";
                                                                $upquery = mysqli_query($db , $upsql);
                                                                if ($upquery) {
                                                                    header("location:dashboard-settings.php");
                                                                }else{
                                                                    die("Failed Update " . mysqli_error($db) );
                                                                }
                                                            }
                                                            else{
                                                                die("Please Check Your Last Password");
                                                            }
                                                        }
                                                        else{
                                                            die("Password Dose Not Match");
                                                        }
                                                    }
                                                 ?>


                                            </div>
                                        </div>
                                        <div class="section-block"></div>
                                    </div><!-- end tab-pane-->
                                </div><!-- end tab-content -->
                            </div><!-- end dashboard-tab-content -->
                                <?php } ?>
                        </div>
                    </div><!-- end card-box-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <?php include"inc/copy.php"; ?>
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
        

    <?php }
 ?>



<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- account-delete-modal -->
<div class="modal-form text-center">
    <div class="modal fade account-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="widget-title font-size-20 mt-2 mb-1">Your account will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white" >Delete</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- Script Connection -->
<?php include"inc/script.php"; ?>
<!-- Script Connection -->
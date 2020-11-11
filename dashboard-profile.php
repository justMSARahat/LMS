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
                    <h3 class="widget-title">My Profile</h3>
                </div>
            </div>
            <div class="row mt-5">
                <?php
                    $aut_id = $_SESSION['users_id']; 
                    $read   = "SELECT * FROM users WHERE users_id = '$aut_id' ";  
                    $rece   = mysqli_query( $db , $read);
                    while ( $row = mysqli_fetch_assoc($rece) ) {
                        extract($row);
                    ?>
                <div class="col-lg-8">
                    <div class="profile-detail pb-5">
                        <ul class="list-items">
                            <li><span class="profile-name">Registration Date:</span><span class="profile-desc"><?php echo $users_joindate; ?></span></li>
                            <li><span class="profile-name">User's Name:</span><span class="profile-desc"><?php echo $users_name; ?></span></li>
                            <li><span class="profile-name">Email:</span><span class="profile-desc"><?php echo $users_email; ?></span></li>
                            <li><span class="profile-name">Phone Number:</span><span class="profile-desc"><?php echo $users_phone; ?></span></li>
                            <li><span class="profile-name">Address:</span><span class="profile-desc"><?php echo $users_addrfess; ?></span></li>
                        </ul>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div><!-- end row -->


            <?php include"inc/copy.php"; ?>


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
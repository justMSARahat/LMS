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

        <section class="dashboard-area">
            <?php include "inc/dash.php"; ?>
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
                            <h3 class="widget-title">Dashboard</h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-element icon-element-bg-1 flex-shrink-0">
                                    <i class="la la-mouse-pointer"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <h4 class="info__title mb-2">Enrolled Courses</h4>
                                    <?php
                                        $aut_id = $_SESSION['users_id']; 
                                        $read   = "SELECT * FROM manage WHERE author_id = '$aut_id'";  
                                        $rece   = mysqli_query( $db , $read);
                                        $total  = mysqli_num_rows($rece);
                                      ?>
                                    <span class="info__count"><?php echo $total; ?></span>
                                </div><!-- end info-content -->
                            </div>
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-element icon-element-bg-2 flex-shrink-0">
                                    <i class="la la-file-text-o"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <h4 class="info__title mb-2">Active Courses</h4>
                                    <?php
                                        $aut_id = $_SESSION['users_id']; 
                                        $read   = "SELECT * FROM manage WHERE author_id = '$aut_id' AND is_returned = 1 ";  
                                        $rece2   = mysqli_query( $db , $read);
                                        $total2  = mysqli_num_rows($rece2);
                                      ?>
                                    <span class="info__count"><?php echo $total2; ?></span>
                                </div><!-- end info-content -->
                            </div>
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-element icon-element-bg-3 flex-shrink-0">
                                    <i class="la la-graduation-cap"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <h4 class="info__title mb-2">Completed Courses</h4>
                                    <?php
                                        $aut_id = $_SESSION['users_id']; 
                                        $read   = "SELECT * FROM manage WHERE author_id = '$aut_id' AND is_returned = 0 ";  
                                        $rece3   = mysqli_query( $db , $read);
                                        $total3  = mysqli_num_rows($rece3);
                                      ?>
                                    <span class="info__count"><?php echo $total3; ?></span>
                                </div><!-- end info-content -->
                            </div>
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-6 column-lmd-2-half column-md-2-full">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-element icon-element-bg-4 flex-shrink-0">
                                    <i class="la la-users"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <h4 class="info__title mb-2">Total Books</h4>
                                    <?php
                                        $read   = "SELECT * FROM book";  
                                        $rece4   = mysqli_query( $db , $read);
                                        $total4  = mysqli_num_rows($rece4);
                                      ?>
                                    <span class="info__count"><?php echo $total4; ?></span>
                                </div><!-- end info-content -->
                            </div>
                        </div><!-- end col-lg-4 -->
                         <div class="col-lg-6 column-lmd-2-half column-md-2-full">
                            <div class="icon-box d-flex align-items-center">
                                <div class="icon-element icon-element-bg-5 flex-shrink-0">
                                    <i class="la la-file-video-o"></i>
                                </div><!-- end icon-element-->
                                <div class="info-content">
                                    <h4 class="info__title mb-2">Total Student</h4>
                                    <?php
                                        $read   = "SELECT * FROM users";  
                                        $rece5   = mysqli_query( $db , $read);
                                        $total5  = mysqli_num_rows($rece5);
                                      ?>
                                    <span class="info__count"><?php echo $total5; ?></span>
                                </div><!-- end info-content -->
                            </div>
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->
                    <div class="row">
                        <?php include"inc/copy.php"; ?>
                    </div>
                </div><!-- end container-fluid -->
            </div>
        </section>

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
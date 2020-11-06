<!-- Header Connection -->
<?php include "inc/header.php"; ?>
<!-- Header Connection -->


<!-- nav Connection -->
<?php include "inc/nav.php"; ?>
<!-- nav Connection -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
     <!-- dash Connection -->
    <?php include "inc/dash.php"; ?>
    <!-- dash Connection -->
    
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                        <div class="user-bread-content d-flex align-items-center">
                            <div class="bread-img-wrap">
                                <img src="images/team10.jpg" alt="">
                            </div>
                            <div class="section-heading">
                                <h2 class="section__title font-size-30">Howdy, Alex Smith</h2>
                                <div class="rating-wrap d-flex mt-2">
                                    <ul class="review-stars">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-o"></span></li>
                                    </ul>
                                    <span class="star-rating-wrap">
                                        <span class="star__rating">4.2</span>
                                        <span class="star__count">(70)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="upload-btn-box">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <input type="file" name="files[]" class="filer_input" multiple="multiple">
                            </form>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
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
                <div class="col-lg-8">
                    <div class="profile-detail pb-5">
                        <ul class="list-items">
                            <li><span class="profile-name">Registration Date:</span><span class="profile-desc">Sat 20 Apr 2019, 03:50:30 AM</span></li>
                            <li><span class="profile-name">First Name:</span><span class="profile-desc">Alex</span></li>
                            <li><span class="profile-name">Last Name:</span><span class="profile-desc">Smith</span></li>
                            <li><span class="profile-name">User Name:</span><span class="profile-desc">alex-admin</span></li>
                            <li><span class="profile-name">Email:</span><span class="profile-desc">alexsmith@gmail.com</span></li>
                            <li><span class="profile-name">Phone Number:</span><span class="profile-desc">(91) 7547 622250</span></li>
                            <li>
                                <span class="profile-name">Bio:</span>
                                <span class="profile-desc">Hello! I am a Alex Smith, Washington area graphic designer with over 6 years of graphic design experience. I specialize in designing infographics, icons, brochures, and flyers.</span>
                            </li>
                        </ul>
                    </div>
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content mt-0 border-top-0 text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copy__desc">&copy; 2020 Aduca. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </div><!-- end copyright-content -->
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

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
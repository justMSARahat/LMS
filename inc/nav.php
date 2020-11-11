<!-- 
  <div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>  -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <?php 
                            $read   = "SELECT * FROM settings";  
                            $send   = mysqli_query( $db , $read);
                            while ( $row = mysqli_fetch_assoc($send) ) {
                                $phone     = $row['phone'];
                                $email     = $row['email'];
                        ?>
                        <ul class="header-action-list">
                            <li><a href="#"><span class="la la-phone mr-2"></span><?php echo $phone; ?></a> </li>
                            <li><a href="#"><span class="la la-envelope-o mr-2"></span><?php echo $email; ?></a></li>
                        </ul>
                    <?php  } ?>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex align-items-center justify-content-end">
                        <div class="header-right-info">
                            <ul class="header-social-profile">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- end header-right-info -->
                        <?php 
                            if ( empty($_SESSION['users_email']) || empty($_SESSION['users_password']) || $_SESSION['users_status'] != 1 ) { ?>
                                <div class="header-right-info">
                                    <ul class="header-action-list">
                                        <li><a href="login.php">Login</a></li>
                                        <li>or</li>
                                        <li><a href="sign-up.php">Register</a></li>
                                    </ul>
                                </div><!-- end header-right-info -->
                            <?php } else{ ?>
                                <div class="header-right-info">
                                    <ul class="header-action-list">
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            <?php }
                         ?>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.php" class="logo"><img src="images/logo.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="#"><i class="la la-th-large mr-1"></i>Categories</a>
                                        <ul class="cat-dropdown-menu">
                                            <?php 
                                                $read   = "SELECT * FROM category WHERE cat_status = 1 AND cat_parrant = 0 ORDER BY cat_name ASC ";  
                                                $send   = mysqli_query( $db , $read);
                                                while ( $row = mysqli_fetch_assoc($send) ) {
                                                    $cat_id      = $row['cat_id'];
                                                    $cat_name    = $row['cat_name'];
                                                        $reada   = "SELECT * FROM category WHERE cat_status = 1 AND cat_parrant ='$cat_id' ORDER BY cat_name ASC ";  
                                                        $senda   = mysqli_query( $db , $reada);
                                                        $num     = mysqli_num_rows($senda);

                                                    if ($num == 0) { ?>
                                                        <li>
                                                            <a href="cat.php?catid=<?php echo "$cat_id" ; ?>"><?php echo "$cat_name" ; ?> </a>
                                                        </li>
                                                    <?php }else{ ?>
                                                        <li>
                                                            <a href="cat.php?catid=<?php echo "$cat_id" ; ?>"><?php echo "$cat_name" ; ?> <i class="la la-angle-right"></i></a>
                                                            <ul class="sub-menu">
                                                               <?php 
                                                                    while ( $row = mysqli_fetch_assoc($senda) ) {
                                                                        $sub_cat_id      = $row['cat_id'];
                                                                        $sub_cat_name    = $row['cat_name'];
                                                                ?>
                                                                <li><a href="cat.php?catid=<?php echo "$sub_cat_id" ; ?>"><?php echo "$sub_cat_name" ; ?></a></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </li>
                                                    <?php } ?>
                                        <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end menu-category -->
                            <div class="contact-form-action">
                                <form action="search.php" method="POST">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search" placeholder="What do you want to learn?">
                                                <button class="la la-search search-icon" type="submit"></button>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="course-grid.php">courses</a>
                                    </li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="logo-right-button">
                                <a href="dashboard.php" class="theme-btn">My Account</a>
                            </div><!-- end logo-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

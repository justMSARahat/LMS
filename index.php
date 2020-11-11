<!-- Header Connection -->
<?php include "inc/header.php"; ?>
<!-- Header Connection -->


<!-- nav Connection -->
<?php include "inc/nav.php"; ?>
<!-- nav Connection -->

<!--================================
         START SLIDER AREA
=================================--> 
<section class="slider-area">
    <div class="single-slide-item single-slide-item-2 slide-bg4">
        <div id="perticles-js-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="section__title">Find the Best <br> Online Courses</h2>
                        <p class="section__desc">
                            Choose from over 200,000 online video courses with new additions <br>
                            published by our instructor every month
                        </p>
                    </div>
                    <div class="hero-search-form">
                        <div class="contact-form-action">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <div class="form-group mb-0">
                                                <form action="search.php" method="POST">
                                                    <div class="input-box">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="search" placeholder="What do you want to learn?">
                                                                <button class="la la-search search-icon" type="submit"></button>
                                                        </div>
                                                    </div><!-- end input-box -->
                                                </form>
                                            </div>
                                        </div><!-- end input-box -->
                                    </div>
                                </div>
                        </div><!-- end contact-form-action -->
                    </div>
                </div><!-- col-lg-12 -->
            </div><!-- row -->
        </div><!-- container -->
        <div class="our-post-content">
            <span class="hw-circle"></span>
            <span class="hw-circle"></span>
            <span class="hw-circle"></span>
            <div class="how-we-work-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="our-post-item">
                                <i class="la la-mouse-pointer icon-element"></i>
                                <div class="our__text">
                                    <h4 class="widget-title">200,000 Online courses</h4>
                                    <p>Explore a variety of fresh topics</p>
                                </div><!-- our__text -->
                            </div><!-- our-post-item -->
                        </div><!-- col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="our-post-item">
                                <i class="la la-users icon-element"></i>
                                <div class="our__text">
                                    <h4 class="widget-title">Expert Instruction</h4>
                                    <p>Find the right instructor for you</p>
                                </div><!-- our__text -->
                            </div><!-- our-post-item -->
                        </div><!-- col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="our-post-item">
                                <i class="la la-graduation-cap icon-element"></i>
                                <div class="our__text">
                                    <h4 class="widget-title">Be Industrial Leader</h4>
                                    <p>Learn on your schedule</p>
                                </div><!-- our__text -->
                            </div><!-- our-post-item -->
                        </div><!-- col-lg-4 -->
                    </div><!-- row -->
                </div>
            </div><!-- end how-we-work-wrap -->
        </div><!-- our-post-content -->
    </div><!-- end single-slide-item -->
</section><!-- end slider-area -->
<!--================================
        END SLIDER AREA
=================================-->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area">
    <div class="course-wrapper section-bg padding-top-40px padding-bottom-40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab">
                        <ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review">
                            <li role="presentation">
                                <a href="#tab1" role="tab" data-toggle="tab" class="theme-btn radius-rounded active" aria-selected="true">
                                    Top Course
                                </a>
                            </li>
                        </ul>
                    </div><!-- end section-tab -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
    <div class="card-content-wrapper padding-top-40px padding-bottom-115px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                            <div class="row">
                                <?php
                                    $read   = "SELECT * FROM book LIMIT 6";  
                                    $send   = mysqli_query( $db , $read);
                                    while ( $row = mysqli_fetch_assoc($send) ) {
                                        $book_id     = $row['book_id'];
                                        $book_title  = $row['book_title'];
                                        $book_desc   = $row['book_desc'];
                                        $book_cat    = $row['book_cat'];
                                        $book_writer = $row['book_writer'];
                                        $book_pub    = $row['book_pub'];
                                        $book_rel    = $row['book_rel'];
                                        $book_meta   = $row['book_meta'];
                                        $book_img    = $row['book_img'];
                                ?>
                                    <div class="col-lg-4">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                            <div class="card-image">
                                                <a href="course-details.php?readid=<?php echo $book_id; ?>" class="card__img"><img src="admin/img/shop/<?php echo $book_img;?>" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <h3 class="card__title">
                                                    <a href="course-details.php?readid=<?php echo $book_id; ?>"> <?php echo $book_title;?></a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Writer:</b> <?php echo $book_writer;?></a><br>
                                                    <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Publisher:</b> <?php echo $book_pub;?></a><br>
                                                    <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Release Date:</b> <?php echo $book_rel;?></a>
                                                </p>
                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                    <a href="course-details.php?readid=<?php echo $book_id; ?>" class="text-btn">Book Now</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                <?php  }   ?>
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-4 text-center">
                        <a href="course-grid.php" class="theme-btn">browse all Courses</a>
                    </div><!-- end btn-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->

<div class="section-block"></div>

<!--======================================
        START CATEGORY AREA
======================================-->
<section class="category-area padding-top-120px category-area2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h5 class="section__meta">Categories</h5>
                    <h2 class="section__title">Browse Top Categories</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
        <div class="row margin-top-28px">
        <?php
            $read   = "SELECT * FROM category WHERE cat_status = 1 LIMIT  8 ";  
            $send   = mysqli_query( $db , $read);
            while ( $row = mysqli_fetch_assoc($send) ) {
                $cat_id     = $row['cat_id'];
                $cat_name  = $row['cat_name'];
        ?>
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="cat.php?catid=<?php echo "$cat_id" ; ?>" class="category-content">
                        <i class="la la-desktop icon-element"></i>
                        <h3 class="cat__title"><?php echo "$cat_name" ;  ?></h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
        <?php } ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end category-area -->
<!--======================================
        END CATEGORY AREA
======================================-->



<!-- ================================
         END FOOTER AREA
================================= -->
<?php include "inc/footer.php" ; ?>
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->


<!-- Script Connection -->
<?php include"inc/script.php"; ?>
<!-- Script Connection -->
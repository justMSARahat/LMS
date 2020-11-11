<!-- Header Connection -->
<?php include "inc/header.php"; ?>
<!-- Header Connection -->


<!-- nav Connection -->
<?php include "inc/nav.php"; ?>
<!-- nav Connection -->


<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">course grid</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="index-2.html">home</a></li>
                        <li class="active__list-item">Books</li>
                        <li>All Books</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->




<section class="course-area padding-top-120px padding-bottom-120px">
    <div class="course-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-bar d-flex justify-content-between align-items-center">
                        <ul class="filter-bar-tab nav nav-tabs align-items-center" id="myTab" role="tablist">
                            <li class="nav-item font-size-15">Showing 1-8 of 14 results</li>
                        </ul>
                    </div><!-- end filter-bar -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="course-content-wrapper mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view" aria-labelledby="grid-view-tab">
                                <div class="row">
                                <?php
                                    $read   = "SELECT * FROM book";  
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
                    </div><!-- end col-lg-8 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-navigation-wrap text-center mt-5">
                            <div class="page-navigation-inner d-inline-block">
                                <div class="page-navigation mx-auto">
                                    <a href="#" class="page-go page-prev">
                                        <i class="la la-arrow-left"></i>
                                    </a>
                                    <ul class="page-navigation-nav">
                                        <li><a href="#" class="page-go-link">1</a></li>
                                        <li class="active"><a href="#" class="page-go-link">2</a></li>
                                        <li><a href="#" class="page-go-link">3</a></li>
                                        <li><a href="#" class="page-go-link">4</a></li>
                                        <li><a href="#" class="page-go-link">5</a></li>
                                    </ul>
                                    <a href="#" class="page-go page-next">
                                        <i class="la la-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end page-navigation-wrap -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end card-content-wrapper -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section><!-- end courses-area -->






<!-- footer Connection -->
<?php include"inc/footer.php"; ?>
<!-- footer Connection -->


<!-- Script Connection -->
<?php include"inc/script.php"; ?>
<!-- Script Connection -->
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
                            <form action="search.php" action="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <div class="form-group mb-0">
                                                <input class="form-control" type="text" name="search" placeholder="What do you want to learn?">
                                                <button class="la la-search search-icon" type="submit"></button>
                                            </div>
                                        </div><!-- end input-box -->
                                    </div>
                                </div>
                            </form>
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
                                    Trending Courses
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" class="theme-btn radius-rounded" aria-selected="false">
                                    Most Popular Courses
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" class="theme-btn radius-rounded" aria-selected="false">
                                    Most Recent Courses
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
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img9.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">advanced</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img11.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img13.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img13.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$33.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img11.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img9.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <div class="row">
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img11.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img9.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                                <a href="#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.html" class="card__img"><img src="images/img13.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.html">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-4 text-center">
                        <a href="course-grid.html" class="theme-btn">browse all Courses</a>
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
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-desktop icon-element"></i>
                        <h3 class="cat__title">development</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-briefcase icon-element"></i>
                        <h3 class="cat__title">business</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-paint-brush icon-element"></i>
                        <h3 class="cat__title">design</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-laptop icon-element"></i>
                        <h3 class="cat__title">IT & Software</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-camera icon-element"></i>
                        <h3 class="cat__title">photography</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-magic icon-element"></i>
                        <h3 class="cat__title">marketing</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-music icon-element"></i>
                        <h3 class="cat__title">music</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="category-item category-item-layout-2">
                    <a href="#" class="category-content">
                        <i class="la la-medkit icon-element"></i>
                        <h3 class="cat__title">health & fitness</h3>
                    </a><!-- end category-content -->
                </div><!-- end category-item -->
            </div><!-- end col-lg-3 -->
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
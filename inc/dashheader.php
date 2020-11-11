<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
            <div class="user-bread-content d-flex align-items-center">
                <div class="bread-img-wrap">
                    <img src="admin/img/user/<?php echo $_SESSION['users_image']; ?>" alt="">
                </div>
                <div class="section-heading">
                    <h2 class="section__title font-size-30">Howdy, <?php echo $_SESSION['users_name']; ?></h2>
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
        </div>
    </div><!-- end col-lg-12 -->
</div><!-- end row -->
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
                    <h3 class="widget-title">Enrolled Books</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Enrolled Books</h3>
                        </div>
                       <div class="card-box-shared-body">
                           <div class="section-tab section-tab-2">
                               <ul class="nav nav-tabs" role="tablist" id="review">
                                   <li role="presentation">
                                       <a href="#pending" role="tab" data-toggle="tab" class="active" aria-selected="true">
                                           Pending Books
                                       </a>
                                   </li>
                                   <li role="presentation">
                                       <a href="#returned" role="tab" data-toggle="tab" aria-selected="false">
                                           Returned
                                       </a>
                                   </li>
                               </ul>
                           </div>
                           <div class="dashboard-tab-content mt-5">
                               <div class="tab-content">
                                   <div role="tabpanel" class="tab-pane fade active show" id="pending">
                                     <?php
                                        $aut_id = $_SESSION['users_id']; 
                                        $read   = "SELECT * FROM manage WHERE author_id = '$aut_id' AND is_returned = 1 ";  
                                        $rece   = mysqli_query( $db , $read);
                                        while ( $row = mysqli_fetch_assoc($rece) ) {
                                            extract($row);
                                      ?>
                                       <div class="card-item card-list-layout">
                                          <?php
                                            $book_id= $_row['book_id']; 
                                            $read   = "SELECT * FROM book WHERE book_id = '$book_id' ";  
                                            $rec   = mysqli_query( $db , $read);
                                            while ( $row = mysqli_fetch_assoc($rec) ) {
                                                extract($row);
                                            }
                                          ?>
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">5/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="100%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">100%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding"></label>
                                                           <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good"></label>
                                                           <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good"></label>
                                                           <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor"></label>
                                                           <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->

                                      <?php } ?> 

                                       
                                   </div><!-- end tab-pane-->
                                   <div role="tabpanel" class="tab-pane fade" id="returned">
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">0/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="0%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">0%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star16" name="rating" value="5" /><label for="star16" title="Outstanding"></label>
                                                           <input type="radio" id="star17" name="rating" value="4" /><label for="star17" title="Very Good"></label>
                                                           <input type="radio" id="star18" name="rating" value="3" /><label for="star18" title="Good"></label>
                                                           <input type="radio" id="star19" name="rating" value="2" /><label for="star19" title="Poor"></label>
                                                           <input type="radio" id="star20" name="rating" value="1" /><label for="star20" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                       <div class="card-item card-list-layout">
                                           <div class="card-image">
                                               <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="teacher-detail.html">kamran paul</a>
                                               </p>
                                               <div class="card-action mt-2">
                                                   <ul class="card-duration d-flex">
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Total Courses:</span>
                                                                <span class="status-text primary-color-3">5</span>
                                                            </span>
                                                       </li>
                                                       <li>
                                                            <span class="meta__date">
                                                                <span class="status-text">Completed Courses:</span>
                                                                <span class="status-text primary-color-3">2/5</span>
                                                            </span>
                                                       </li>
                                                   </ul>
                                               </div><!-- end card-action -->
                                               <div class="progress-bar-wrap mb-3">
                                                   <div class="progress-item course-complete-bar">
                                                       <p class="skillbar-title">Complete</p>
                                                       <div class="skillbar-box">
                                                           <div class="skillbar" data-percent="30%">
                                                               <div class="skillbar-bar skillbar-bar-1"></div>
                                                           </div> <!-- End Skill Bar -->
                                                       </div>
                                                       <div class="skill-bar-percent">30%</div>
                                                   </div>
                                               </div>
                                               <div class="rating-wrap d-flex">
                                                   <div class="rating-shared">
                                                       <fieldset>
                                                           <input type="radio" id="star21" name="rating" value="5" /><label for="star21" title="Outstanding"></label>
                                                           <input type="radio" id="star22" name="rating" value="4" /><label for="star22" title="Very Good"></label>
                                                           <input type="radio" id="star23" name="rating" value="3" /><label for="star23" title="Good"></label>
                                                           <input type="radio" id="star24" name="rating" value="2" /><label for="star24" title="Poor"></label>
                                                           <input type="radio" id="star25" name="rating" value="1" /><label for="star25" title="Very Poor"></label>
                                                       </fieldset>
                                                   </div>
                                                   <p class="primary-color-3 ml-2">Leave a Rating</p>
                                               </div>
                                           </div><!-- end card-content -->
                                       </div><!-- end card-item -->
                                   </div><!-- end tab-pane-->
                                   
                               </div><!-- end tab-content -->
                           </div><!-- end dashboard-tab-content -->
                       </div>
                    </div>
                </div><!-- end col-lg-12 -->
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
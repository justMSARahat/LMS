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
                                          $id          = $row['id'];
                                          $book_id     = $row['book_id'];
                                          $author_id   = $row['author_id'];
                                          $order_date  = $row['order_date'];
                                          $return_date = $row['return_date'];
                                          $is_returned = $row['is_returned'];
                                      ?>
                                       <div class="card-item card-list-layout">
                                          <?php
                                            $book_id= $row['book_id']; 
                                            $read   = "SELECT * FROM book WHERE book_id = '$book_id' ";  
                                            $rec   = mysqli_query( $db , $read);
                                            while ( $row = mysqli_fetch_assoc($rec) ) {
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
                                           <div class="card-image">
                                               <a href="course-details.php?readid=<?php echo $book_id; ?>" class="card__img"><img src="admin/img/shop/<?php echo $book_img; ?>" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>"><?php echo $book_title; ?></a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Writer :</b><?php echo $book_writer; ?></a>
                                               </p>
                                               <p class="card__author">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Publication :</b><?php echo $book_pub; ?></a>
                                               </p>
                                               <p class="card__author">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>" ><b>Release Date :</b><?php echo $book_rel; ?></a>
                                               </p>
                                               <div class="action">
                                                  <a href="dashboard-enrolled-courses.php?id=<?php echo $id; ?>" class="add-to-cart btn btn-default h1_1" type="button" data-toggle="modal" data-target="#delete<?php echo $id; ?>"> Return it </a>
                                               </div>
                                                <!-- Modal -->
                                                    <div class="modal fade" id="delete<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            Confirm to Cancel this ?
                                                          </div>
                                                          <form action="" method="POST">
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                              <a href="dashboard-enrolled-courses.php?id=<?php echo $id; ?>" class="btn btn-primary">Confirm</a>
                                                            </div>
                                                            <?php 
                                                              if (isset($_GET['id']) ) {
                                                                $back_id = $_GET['id'];
                                                                $sqla = "UPDATE manage SET is_returned ='0' WHERE id = '$back_id' ";
                                                                $cona = mysqli_query( $db , $sqla );
                                                                if ($cona) {
                                                                  header("location:dashboard-enrolled-courses.php");
                                                                }else{
                                                                  die("Something Error " . mysqli_error($db) );
                                                                }
                                                              }  
                                                             ?>
                                                          </form>
                                                        </div>
                                                      </div>
                                                    </div>
                                           </div><!-- end card-content -->
                                          <?php } ?>

                                       </div><!-- end card-item -->

                                      <?php } ?> 
                                   </div><!-- end tab-pane-->
                                   <div role="tabpanel" class="tab-pane fade" id="returned">
                                     <?php
                                        $aut_id = $_SESSION['users_id']; 
                                        $read   = "SELECT * FROM manage WHERE author_id = '$aut_id' AND is_returned = 0 ";  
                                        $rece   = mysqli_query( $db , $read);
                                        while ( $row = mysqli_fetch_assoc($rece) ) {
                                          $id          = $row['id'];
                                          $book_id     = $row['book_id'];
                                          $author_id   = $row['author_id'];
                                          $order_date  = $row['order_date'];
                                          $return_date = $row['return_date'];
                                          $is_returned = $row['is_returned'];
                                      ?>
                                       <div class="card-item card-list-layout">
                                          <?php
                                            $book_id= $row['book_id']; 
                                            $read   = "SELECT * FROM book WHERE book_id = '$book_id' ";  
                                            $rec   = mysqli_query( $db , $read);
                                            while ( $row = mysqli_fetch_assoc($rec) ) {
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
                                           <div class="card-image">
                                               <a href="course-details.php?readid=<?php echo $book_id; ?>" class="card__img"><img src="admin/img/shop/<?php echo $book_img; ?>" alt=""></a>
                                           </div><!-- end card-image -->
                                           <div class="card-content">
                                               <h3 class="card__title">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>"><?php echo $book_title; ?></a>
                                               </h3>
                                               <p class="card__author">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Writer :</b><?php echo $book_writer; ?></a>
                                               </p>
                                               <p class="card__author">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Publication :</b><?php echo $book_pub; ?></a>
                                               </p>
                                               <p class="card__author">
                                                   <a href="course-details.php?readid=<?php echo $book_id; ?>"><b>Release Date :</b><?php echo $book_rel; ?></a>
                                               </p>
                                           </div><!-- end card-content -->
                                          <?php } ?>

                                       </div><!-- end card-item -->

                                      <?php } ?> 
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
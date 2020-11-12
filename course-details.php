<!-- Header Connection -->
<?php include "inc/header.php"; ?>
<!-- Header Connection -->


<!-- nav Connection -->
<?php include "inc/nav.php"; ?>
<!-- nav Connection -->



<!--======================================
        START COURSE DETAIL
======================================-->
<section class="course-detail margin-bottom-110px">
   <div class="container">
		<div class="card">
			<div class="container-fliud">
				<?php
					if (isset($_GET['readid'])) {
				 		$id = $_GET['readid'];
				 		$read   = "SELECT * FROM book WHERE book_id = '$id' ";  
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
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="admin/img/shop/<?php echo $book_img; ?>" /></div>
						</div>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $book_title; ?>
						</h3>
						<p class="product-description"><?php echo $book_desc; ?></p>
	                      <?php
	                        $par_read_cat = "SELECT * FROM category WHERE cat_id='$book_cat' ";
	                        $par_send_cat = mysqli_query($db,$par_read_cat);
	                        while ($row = mysqli_fetch_assoc($par_send_cat) ) {
	                          $par_cat_id     = $row['cat_id'];
	                          $par_cat_name   = $row['cat_name'];  
	                      ?>
							<h5 class="sizes">Category:
								<span class="size" ><?php echo $par_cat_name; ?></span>
							</h5>
	                      <?php
	                      	}
	                      ?>
						<h5 class="sizes">Writer:
							<span class="size" ><?php echo $book_writer; ?></span>
						</h5>
						<h5 class="sizes">Publication:
							<span class="size" ><?php echo $book_pub; ?></span>
						</h5>
						<h5 class="sizes">Release Date:
							<span class="size" ><?php echo $book_rel; ?></span>
						</h5>
						 <?php 
						 	if ( empty($_SESSION['users_email']) || empty($_SESSION['users_password']) || $_SESSION['users_status'] != 1 ) { ?> 
        						<div class="alert alert-warning">You Have To Log in For Order This</div>

      					  <?php	} else if( !empty($_SESSION['users_email']) || !empty($_SESSION['users_password']) || $_SESSION['users_status'] = 1 ) { ?>
						 <?php
					            $aut_id = $_SESSION['users_id']; 
		                        $r = "SELECT * FROM manage WHERE book_id='$id' AND author_id='$aut_id' AND is_returned=1 ";
		                        $a = mysqli_query($db,$r);
		                        $n = mysqli_num_rows($a); 
		                      	if ($n == 1) { ?>
		                      	<div class="action">
									<span class="alert alert-warning">You Already Have This Book. Cancel It From Your <a href="dashboard-enrolled-courses.php">Admin Panel</a></span>
								</div>
		                      <?php } else{ ?>
								<div class="action">
									<a href="course-details.php?orderid=<?php echo $book_id; ?>" class="add-to-cart btn btn-default" type="button" data-toggle="modal" data-target="#order<?php echo $book_id; ?>"> Book Now </a>
								</div>
	                      <?php } ?>
						<!-- Modal -->
						<div class="modal fade" id="order<?php echo $book_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Check Out</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      	<?php
				                    $aut_id = $_SESSION['users_id']; 
				                    $read   = "SELECT * FROM users WHERE users_id = '$aut_id' ";  
				                    $rece   = mysqli_query( $db , $read);
				                    while ( $row = mysqli_fetch_assoc($rece) ) {
				                        $users_id       = $row['users_id']; 
				                        $users_name     = $row['users_name']; 
										$users_phone    = $row['users_phone'];
										$users_addrfess = $row['users_addrfess'];

				                ?>
						        <form action="" method="POST" >
							      <div class="modal-body">
							        	<input type="hidden" value="<?php echo $users_id; ?>" name="users_id" >
							        	<input type="hidden" value="<?php echo $book_id; ?>" name="book_id" >
							        	<div class="form-group">
							        		<label for="">Name</label>
							        		<input type="text" readonly value="<?php echo $users_name; ?>" class="form-control" name="name">
							        	</div>
							        	<div class="form-group">
							        		<label for="">Address</label>
							        		<input type="text" readonly value="<?php echo $users_phone; ?>" class="form-control" name="name">
							        	</div>
							        	<div class="form-group">
							        		<label for="">Phone</label>
							        		<input type="text" readonly value="<?php echo $users_addrfess; ?>" class="form-control" name="name">
							        	</div>
							        	<div class="form-group">
							        		<label for="">Return Date</label>
							        		<input type="text" class="form-control" name="date" id="datepicker">
							        	</div>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" name="button" class="btn btn-primary">Complete</button>
							      </div>
						        </form>
						    	<?php } ?>
						    	<?php 
						    		if (isset($_POST['button'])) {
						    			$id   = $_POST['users_id'];
						    			$book = $_POST['book_id'];
						    			$date = $_POST['date'];

						    			$sql = "INSERT INTO manage (book_id,author_id,order_date,return_date,is_returned) VALUES ('$book','$id',now(),'$date',1)";
						    			$con = mysqli_query( $db , $sql );
						    			if ($con) {
						    				header("location:dashboard-enrolled-courses.php");
						    			}else{
						    				die("Something Error");
						    			}
						    		}
						    	?>
						    </div>
						  </div>
						</div>

      						<?php }	?>
					</div>
				</div>
                <?php
                        }    
					}
				?>
			</div>
		</div>
	</div>
</section><!-- end course-detail -->
<!--======================================
        END COURSE DETAIL
======================================-->







<!-- footer Connection -->
<?php include"inc/footer.php"; ?>
<!-- footer Connection -->

<!-- Script Connection -->
<?php include"inc/script.php"; ?>
<!-- Script Connection -->

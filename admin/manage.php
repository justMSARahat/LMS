
<!-- Header Connection -->
<?php include "inc/header.php";?>
<!-- Header Connection -->

<!-- Navbar connection -->
<?php include "inc/menu.php";?>
<!-- /.navbar connection -->

<!-- Sidebar Connection -->
<?php include "inc/aside.php";?>
<!-- Sidebar Connection -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


     
    <?php
      $user = isset($_GET['action']) ? $_GET['action'] : 'manage' ; 
      if ($user == 'or') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">All History</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <table class="table table-hover">
                      <thead>
                        <tr class="up_c">
                          <th class="text-center" scope="col">SL</th>
                          <th class="text-center" scope="col">Book Name</th>
                          <th class="text-center" scope="col">Book Category</th>
                          <th class="text-center" scope="col">Author Name</th>
                          <th class="text-center" scope="col">Author Email</th>
                          <th class="text-center" scope="col">Author Phone</th>
                          <th class="text-center" scope="col">Order Date</th>
                          <th class="text-center" scope="col">Return Date</th>
                          <th class="text-center" scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_user = "SELECT * FROM manage WHERE is_returned = 1 ORDER BY book_id ASC ";
                          $send_user = mysqli_query($db,$read_user);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_user) ) {
                            $id          = $row['id'];
                            $book_id     = $row['book_id'];  
                            $author_id   = $row['author_id']; 
                            $order_date  = $row['order_date'];
                            $return_date = $row['return_date'];
                            $is_returned = $row['is_returned'];
                            $sl++;
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $sl ; ?></td>
                            <?php
                                $userb = "SELECT * FROM book WHERE book_id = '$book_id' ";
                                $userb = mysqli_query($db,$userb);
                                while ($row = mysqli_fetch_assoc($userb) ) {
                                  $book_id    = $row['book_id']; 
                                  $book_title = $row['book_title']; 
                                  $book_cat   = $row['book_cat']; 
                              ?>
                            <td class="text-center"><?php echo $book_title ; ?></td>
                            <td class="text-center">
                              <?php 
                                $read_cat = "SELECT * FROM category WHERE cat_id = '$book_cat'  ";
                                $send_cat = mysqli_query($db,$read_cat);
                                while ($row = mysqli_fetch_assoc($send_cat) ) {
                                  $cat_id      = $row['cat_id'];
                                  $cat_name      = $row['cat_name'];
                                  echo "$cat_name";
                                }  
                              ?>
                            </td>
                            <?php } ?>
                              <?php
                                $user = "SELECT * FROM users WHERE users_id = '$author_id' ";
                                $user = mysqli_query($db,$user);
                                while ($row = mysqli_fetch_assoc($user) ) {
                                  $users_id    = $row['users_id']; 
                                  $users_name  = $row['users_name']; 
                                  $users_email = $row['users_email']; 
                                  $users_phone = $row['users_phone'];
                              ?>
                            <td class="text-center"><?php echo $users_name; ?></td>
                            <td class="text-center"><?php echo $users_email ; ?></td>
                            <td class="text-center"><?php echo $users_phone ; ?></td>
                              <?php
                                }  
                              ?>
                            <td class="text-center"><?php echo $order_date ; ?></td>
                            <td class="text-center"><?php echo $return_date ; ?></td>
                            <td class="text-center">
                              <a href="manage.php?action=back&id=<?php echo $id; ?>" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $id; ?>"><i class="fas fa-window-close"></i></a>
                            </td>
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
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="manage.php?action=back&id=<?php echo $id; ?>" class="btn btn-primary">Confirm</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </tr>
                        <?php  } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
      <?php }
      else if ($user == 'back') {
        if (isset($_GET['id'])) {
          $back_id = $_GET['id'];
          $sqla = "UPDATE manage SET is_returned ='0' WHERE id = '$back_id' ";
          $cona = mysqli_query( $db , $sqla );
          if ($cona) {
            header("location:manage.php?action=or");
          }else{
            die("Something Error " . mysqli_error($db) );
          }







        }
      }
      else if ($user == 're') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">All History</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <table class="table table-hover">
                      <thead>
                        <tr class="up_c">
                          <th class="text-center" scope="col">SL</th>
                          <th class="text-center" scope="col">Book Name</th>
                          <th class="text-center" scope="col">Book Category</th>
                          <th class="text-center" scope="col">Author Name</th>
                          <th class="text-center" scope="col">Author Email</th>
                          <th class="text-center" scope="col">Author Phone</th>
                          <th class="text-center" scope="col">Order Date</th>
                          <th class="text-center" scope="col">Return Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_user = "SELECT * FROM manage WHERE is_returned = 0 ORDER BY book_id ASC ";
                          $send_user = mysqli_query($db,$read_user);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_user) ) {
                            $id          = $row['id'];
                            $book_id     = $row['book_id'];  
                            $author_id   = $row['author_id']; 
                            $order_date  = $row['order_date'];
                            $return_date = $row['return_date'];
                            $is_returned = $row['is_returned'];
                            $sl++;
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $sl ; ?></td>
                            <?php
                                $userb = "SELECT * FROM book WHERE book_id = '$book_id' ";
                                $userb = mysqli_query($db,$userb);
                                while ($row = mysqli_fetch_assoc($userb) ) {
                                  $book_id    = $row['book_id']; 
                                  $book_title = $row['book_title']; 
                                  $book_cat   = $row['book_cat']; 
                              ?>
                            <td class="text-center"><?php echo $book_title ; ?></td>
                            <td class="text-center">
                              <?php 
                                $read_cat = "SELECT * FROM category WHERE cat_id = '$book_cat'  ";
                                $send_cat = mysqli_query($db,$read_cat);
                                while ($row = mysqli_fetch_assoc($send_cat) ) {
                                  $cat_id      = $row['cat_id'];
                                  $cat_name      = $row['cat_name'];
                                  echo "$cat_name";
                                }  
                              ?>
                            </td>
                            <?php } ?>
                              <?php
                                $user = "SELECT * FROM users WHERE users_id = '$author_id' ";
                                $user = mysqli_query($db,$user);
                                while ($row = mysqli_fetch_assoc($user) ) {
                                  $users_id    = $row['users_id']; 
                                  $users_name  = $row['users_name']; 
                                  $users_email = $row['users_email']; 
                                  $users_phone = $row['users_phone'];
                              ?>
                            <td class="text-center"><?php echo $users_name; ?></td>
                            <td class="text-center"><?php echo $users_email ; ?></td>
                            <td class="text-center"><?php echo $users_phone ; ?></td>
                              <?php
                                }  
                              ?>
                            <td class="text-center"><?php echo $order_date ; ?></td>
                            <td class="text-center"><?php echo $return_date ; ?></td>
                          </tr>
                        <?php  } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
      <?php }
      else if ($user == 'inv') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">INVOICES</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <table class="table table-hover">
                      <thead>
                        <tr class="up_c">
                          <th class="text-center" scope="col">SL</th>
                          <th class="text-center" scope="col">Book Name</th>
                          <th class="text-center" scope="col">Author Name</th>
                          <th class="text-center" scope="col">Order Date</th>
                          <th class="text-center" scope="col">Return Date</th>
                          <th class="text-center" scope="col">Invoice Details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_user = "SELECT * FROM manage ORDER BY book_id ASC ";
                          $send_user = mysqli_query($db,$read_user);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_user) ) {
                            $id          = $row['id'];
                            $book_id     = $row['book_id'];  
                            $author_id   = $row['author_id']; 
                            $order_date  = $row['order_date'];
                            $return_date = $row['return_date'];
                            $is_returned = $row['is_returned'];
                            $sl++;
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $sl ; ?></td>
                            <?php
                                $userb = "SELECT * FROM book WHERE book_id = '$book_id' ";
                                $userb = mysqli_query($db,$userb);
                                while ($row = mysqli_fetch_assoc($userb) ) {
                                  $book_id    = $row['book_id']; 
                                  $book_title = $row['book_title']; 
                                  $book_cat   = $row['book_cat']; 
                              ?>
                            <td class="text-center"><?php echo $book_title ; ?></td>
                            <?php } ?>
                              <?php
                                $user = "SELECT * FROM users WHERE users_id = '$author_id' ";
                                $user = mysqli_query($db,$user);
                                while ($row = mysqli_fetch_assoc($user) ) {
                                  $users_id    = $row['users_id']; 
                                  $users_name  = $row['users_name']; 
                                  $users_email = $row['users_email']; 
                                  $users_phone = $row['users_phone'];
                              ?>
                            <td class="text-center"><?php echo $users_name; ?></td>
                              <?php
                                }  
                              ?>
                            <td class="text-center"><?php echo $order_date ; ?></td>
                            <td class="text-center"><?php echo $return_date ; ?></td>
                            <td class="text-center">
                              <a href="" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $id; ?>"><i class="fas fa-eye"></i></a>
                            </td>
                          <!-- Modal -->
                              <div class="modal fade" id="delete<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Confirm to Delete this User?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="user.php?action=delete&deleteid=<?php echo $user_id; ?>" class="btn btn-primary">Delete</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </tr>
                        <?php  } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
      <?php }
      else if ($user == 'delete') { 

        if (isset($_GET['deleteid'])) {
          $delid = $_GET['deleteid'];
          $del  = "DELETE FROM user WHERE user_id = '$delid' AND user_role != 1 ";
          $done = mysqli_query($db, $del);
          if ($done) {
            header("location:user.php?action=manage");
          }else{
            die("Failed to Delete user");
          }
        }
      }

    ?>
</div>
<!-- footer Connection -->
<?php include "inc/footer.php";?>
<!-- footer Connection -->
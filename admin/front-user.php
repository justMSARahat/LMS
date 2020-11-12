
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
      $users = isset($_GET['action']) ? $_GET['action'] : 'manage' ; 
      if ($users == 'manage') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Manage All userss</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center" scope="col">SL</th>
                          <th class="text-center" scope="col">IMAGE</th>
                          <th class="text-center" scope="col">NAME</th>
                          <th class="text-center" scope="col">EMAIL</th>
                          <th class="text-center" scope="col">PHONE</th>
                          <th class="text-center" scope="col">ADDRESS</th>
                          <th class="text-center" scope="col">STATUS</th>
                          <th class="text-center" scope="col">GENDER</th>
                          <th class="text-center" scope="col">JOIN DATE</th>
                          <th class="text-center" scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_users = "SELECT * FROM users ORDER BY users_name ASC ";
                          $send_users = mysqli_query($db,$read_users);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_users) ) {
                            $users_id        = $row['users_id'];
                            $users_image     = $row['users_image'];  
                            $users_name      = $row['users_name']; 
                            $users_email     = $row['users_email'];
                            $users_password  = $row['users_password'];
                            $users_phone     = $row['users_phone'];
                            $users_address   = $row['users_addrfess'];
                            $users_status    = $row['users_status'];
                            $users_gender    = $row['users_gender'];
                            $users_join_date = $row['users_joindate'];
                            $sl++;
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $sl ; ?></td>
                            <td class="text-center">
                              <?php
                                if (empty($users_image)) { ?>
                                  <img src="img/user/alt.png" alt="Profile Image" class="pro_1">
                                <?php }
                                else{ ?>
                                  <img src="img/user/<?php echo $users_image ; ?>" alt="Profile Image" class="pro_1">
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $users_name ; ?></td>
                            <td class="text-center"><?php echo $users_email ; ?></td>
                            <td class="text-center"><?php echo $users_phone ; ?></td>
                            <td class="text-center"><?php echo $users_address ; ?></td>
                            <td class="text-center">
                              <?php
                                if ($users_status == 1) { ?>
                                  <span class="badge badge-success">Active</span>
                                <?php }else if ( $users_status == 2) { ?>
                                  <span class="badge badge-Primary">Inactive</span>
                                <?php }else if ( $users_status == 3 ) { ?>
                                  <span class="badge badge-danger">Pending</span>
                                <?php }else if ( $users_status == 4 ) { ?>
                                  <span class="badge badge-warning">Disabled</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center">
                              <?php
                                if ($users_gender == 1) { ?>
                                  <span class="badge badge-success">Male</span>
                                <?php }else if ( $users_gender == 2) { ?>
                                  <span class="badge badge-success">Femle</span>
                                <?php }else if ( $users_gender == 3 ) { ?>
                                  <span class="badge badge-success">Other</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $users_join_date ; ?></td>
                            <td class="text-center">
                              <a href="front-user.php?action=edit&edit=<?php echo $users_id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="front-user.php?action=delete&deleteid=<?php echo $users_id; ?>" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $users_id; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                          <!-- Modal -->
                              <div class="modal fade" id="delete<?php echo $users_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Confirm to Delete this users?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="front-user.php?action=delete&deleteid=<?php echo $users_id; ?>" class="btn btn-primary">Delete</a>
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
            <a href="front-user.php?action=add" class="btn btn-success">Add New Member</a>
          </div>
        </section>
      <?php }
      else if ($users == 'add') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Add New User</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="front-user.php?action=insert" method="POST" enctype="multipart/form-data">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Name</label>
                          <input type="name" class="form-control" id="inputEmail4" placeholder="Full Name" name="users_name" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="users_email" required="required">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="users_password" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Retype Password</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password" name="repassword" required="required">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="inputPassword4">Address</label>
                          <input type="text" class="form-control" id="inputPassword4" placeholder="Address" name="users_address" required="required">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Phone Number</label>
                          <input type="text" class="form-control" id="inputPassword4" placeholder="Contact Phone Number" name="users_phone" required="required">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Gender</label>
                          <select name="users_gender" id="" class="form-control">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Status</label>
                          <select name="users_status" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Pending</option>
                            <option value="4">Disabled</option>
                          </select>
                        </div>
                        <div class="form-group col-md-12">
                          <label for="exampleFormControlFile1">Profile Picture</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="users_image">
                        </div>
                      </div>
                      <button type="submit" name="useradd" class="btn btn-primary">Register</button>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>
      <?php }
      else if ($users == 'insert') { 
        if ( $_SERVER['REQUEST_METHOD'] = 'POST' ) {
          $users_name      = $_POST['users_name'];
          $users_email     = $_POST['users_email'];
          $users_password  = $_POST['users_password'];
          $repassword      = $_POST['repassword'];
          $users_phone     = $_POST['users_phone'];
          $users_address   = $_POST['users_address'];
          $users_role      = $_POST['users_role'];
          $users_status    = $_POST['users_status'];
          $users_gender    = $_POST['users_gender'];
           //image preparing
          $imagename    = $_FILES['users_image']['name'];
          $imagetype    = $_FILES['users_image']['type'];
          $imagesize    = $_FILES['users_image']['size'];
          $imagetemp    = $_FILES['users_image']['tmp_name'];
          //extension
          $exploded = explode('.', $imagename);
          $last_element = end($exploded);
          $imageExtention = strtolower($last_element);
          $imageAllowedExtention = array("jpg","jpeg","png");



          //form error
          $error = array();
          if ( strlen($users_name) < 4) {
            $error = "users Name is Too Short";
          }
          if ( !empty($imagename) ){
            if ( !empty($imagename) && !in_array($imageExtention, $imageAllowedExtention) ){
              $formerror = 'Invalid Image Format. Please Upload a JPG, JPEG or PNG image';
            }
            if ( !empty($imagesize) && $imagesize > 2097152 ){
              $formerror = 'Image Size is Too Large! Allowed Image size Max is 2 MB.';
            }
          }
          if ( $users_password != $repassword) {
            $error = "Password Dose Not Match";
          }
          if ( empty($imagename)) {
            $error = "Profile Picture Not Found";
          }
          if (empty($error)) {

            $img_name = rand(1, 99999).'_'.$imagename;
            move_uploaded_file($imagetemp, "img/user/$img_name");

            $sha1= sha1($pass);

            $sql = "INSERT INTO users (users_image,users_name,users_email,users_password,users_phone,users_addrfess,users_status,users_gender,users_joindate) VALUES ('$img_name','$users_name','$users_email','$sha1','$users_phone','$users_address',$users_status,'$users_gender',now())";
            $query = mysqli_query($db , $sql);
            if ($query) {
              header("location:front-user.php?action=manage");
            }else{
              die("Failed to add users ". mysqli_error($db) );
            }
          }
        }
      }
      else if ($users == 'edit') { 
          if (isset($_GET['edit'])) {
            $editid = $_GET['edit'];
            $read_users = "SELECT * FROM users WHERE users_id = '$editid' ";
            $send_users = mysqli_query($db,$read_users);
            while ($row = mysqli_fetch_assoc($send_users) ) {
              $users_id        = $row['users_id'];
              $users_image     = $row['users_image'];  
              $users_name      = $row['users_name']; 
              $users_email     = $row['users_email'];
              $users_password  = $row['users_password'];
              $users_phone     = $row['users_phone'];
              $users_address   = $row['users_addrfess'];
              $users_status    = $row['users_status'];
              $users_gender    = $row['users_gender'];
              $users_join_date = $row['users_joindate'];
          ?>
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Edit users</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                      </div>
                      <div class="card-body" style="display: block;">
                        <form action="front-user.php?action=update" method="POST" enctype="multipart/form-data">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Name</label>
                              <input type="name" class="form-control" id="inputEmail4" placeholder="Full Name" name="users_name" required="required" value="<?php echo $users_name;?>" >
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Email</label>
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="users_email" required="required" value="<?php echo $users_email;?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-8">
                              <label for="inputPassword4">Address</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="Address" name="users_address" required="required" value="<?php echo $users_address;?>">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">Phone Number</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="Contact Phone Number" name="users_phone" required="required" value="<?php echo $users_phone;?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Gender</label>
                              <select name="users_gender" id="" class="form-control">
                                <option value="1" <?php if( $users_gender == 1 ){ echo "selected"; } ?> >Male</option>
                                <option value="2" <?php if( $users_gender == 2 ){ echo "selected"; } ?> >Female</option>
                                <option value="3" <?php if( $users_gender == 3 ){ echo "selected"; } ?> >Other</option>
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Status</label>
                              <select name="users_status" id="" class="form-control">
                                <option value="1" <?php if( $users_status == 1 ){ echo "selected"; } ?> >Active</option>
                                <option value="2" <?php if( $users_status == 2 ){ echo "selected"; } ?> >Inactive</option>
                                <option value="3" <?php if( $users_status == 3 ){ echo "selected"; } ?> >Pending</option>
                                <option value="4" <?php if( $users_status == 4 ){ echo "selected"; } ?> >Disabled</option>
                              </select>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="exampleFormControlFile1">Profile Picture</label>
                              <?php
                                if (!empty($users_image)) { ?>
                                  <img src="img/user/<?php echo $users_image ; ?>" alt="" class="up_img">
                                <?php } else{
                                  echo "No Image Found";
                                }
                              ?>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="users_image">
                            </div>
                          </div>
                          <button type="submit" name="update" class="btn btn-primary">Update</button>
                          <input type="hidden" value="<?php echo $users_id; ?> " name="edit_id" >
                        </form>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
            </section>
          <?php
            }
          }
        ?>
      <?php }
      else if ($users == 'update') { 
        if ( $_SERVER['REQUEST_METHOD'] = 'POST' ) {
          $edit_id         = $_POST['edit_id'];
          $users_name      = $_POST['users_name'];
          $users_email     = $_POST['users_email'];
          $users_phone     = $_POST['users_phone'];
          $users_address   = $_POST['users_address'];
          $users_status    = $_POST['users_status'];
          $users_gender    = $_POST['users_gender'];
           //image preparing
          $imagename    = $_FILES['users_image']['name'];
          $imagetype    = $_FILES['users_image']['type'];
          $imagesize    = $_FILES['users_image']['size'];
          $imagetemp    = $_FILES['users_image']['tmp_name'];
          //extension
          $supportedext = array("jpg","jpeg","png");
          $nameexplode  = strtolower(end(explode('.', $imagename) ) );
          //form error
            if (!empty($imagename)) {
              $error = array();
                if ( $users_name > 4) {
                  $error = "users Name is Too Short";
                }
                if ( empty($imagename)) {
                  $error = "Profile Picture Not Found";
                }
                if (empty($error)) {
                  $remove = "SELECT * FROM users WHERE users_id='$edit_id' ";
                  $cmd    = mysqli_query($db,$remove);
                  while ($row = mysqli_fetch_assoc($cmd) ) {
                    $users_id     = $row['users_id'];
                    $users_image   = $row['users_image'];  
                  }
                  unlink("img/user/".$users_image);
    
                  $img_name = rand(1, 99999).'_'.$imagename;
                  move_uploaded_file($imagetemp, "img/user/$img_name");

                  $sql = "UPDATE users SET users_image='$img_name',users_name='$users_name',users_email='$users_email',users_phone='$users_phone',users_addrfess='$users_address',users_status='$users_status',users_gender='$users_gender' WHERE users_id='$edit_id'";
                  $query = mysqli_query($db , $sql);
                  if ($query) {
                    header("location:front-user.php?action=manage");
                  }else{
                    die("Failed to add users ". mysqli_error($db) );
                  }
                }
            }
            else{
              $error = array();
                if ( $users_name > 4) {
                  $error = "users Name is Too Short";
                }
                if (empty($error)) {
                  $sql = "UPDATE users SET users_name='$users_name',users_email='$users_email',users_phone='$users_phone',users_addrfess='$users_address',users_status='$users_status',users_gender='$users_gender' WHERE users_id='$edit_id' ";
                  $query = mysqli_query($db , $sql);
                  if ($query) {
                    header("location:front-user.php?action=manage");
                  }else{
                    die("Failed to add users ". mysqli_error($db) );
                  }
                }
            }
        }
        ?>
      <?php }
      else if ($users == 'pending') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Manage All userss</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center" scope="col">SL</th>
                          <th class="text-center" scope="col">IMAGE</th>
                          <th class="text-center" scope="col">NAME</th>
                          <th class="text-center" scope="col">EMAIL</th>
                          <th class="text-center" scope="col">PHONE</th>
                          <th class="text-center" scope="col">ADDRESS</th>
                          <th class="text-center" scope="col">STATUS</th>
                          <th class="text-center" scope="col">GENDER</th>
                          <th class="text-center" scope="col">JOIN DATE</th>
                          <th class="text-center" scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_users = "SELECT * FROM users WHERE users_status != 1 ORDER BY users_name ASC ";
                          $send_users = mysqli_query($db,$read_users);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_users) ) {
                            $users_id        = $row['users_id'];
                            $users_image     = $row['users_image'];  
                            $users_name      = $row['users_name']; 
                            $users_email     = $row['users_email'];
                            $users_password  = $row['users_password'];
                            $users_phone     = $row['users_phone'];
                            $users_address   = $row['users_addrfess'];
                            $users_status    = $row['users_status'];
                            $users_gender    = $row['users_gender'];
                            $users_join_date = $row['users_joindate'];
                            $sl++;
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $sl ; ?></td>
                            <td class="text-center">
                              <?php
                                if (empty($users_image)) { ?>
                                  <img src="img/user/alt.png" alt="Profile Image" class="pro_1">
                                <?php }
                                else{ ?>
                                  <img src="img/user/<?php echo $users_image ; ?>" alt="Profile Image" class="pro_1">
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $users_name ; ?></td>
                            <td class="text-center"><?php echo $users_email ; ?></td>
                            <td class="text-center"><?php echo $users_phone ; ?></td>
                            <td class="text-center"><?php echo $users_address ; ?></td>
                            <td class="text-center">
                              <?php
                                if ($users_status == 1) { ?>
                                  <span class="badge badge-success">Active</span>
                                <?php }else if ( $users_status == 2) { ?>
                                  <span class="badge badge-Primary">Inactive</span>
                                <?php }else if ( $users_status == 3 ) { ?>
                                  <span class="badge badge-danger">Pending</span>
                                <?php }else if ( $users_status == 4 ) { ?>
                                  <span class="badge badge-warning">Disabled</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center">
                              <?php
                                if ($users_gender == 1) { ?>
                                  <span class="badge badge-success">Male</span>
                                <?php }else if ( $users_gender == 2) { ?>
                                  <span class="badge badge-success">Femle</span>
                                <?php }else if ( $users_gender == 3 ) { ?>
                                  <span class="badge badge-success">Other</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $users_join_date ; ?></td>
                            <td class="text-center">
                              <a href="front-user.php?action=edit&edit=<?php echo $users_id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="front-user.php?action=delete&deleteid=<?php echo $users_id; ?>" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $users_id; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                          <!-- Modal -->
                              <div class="modal fade" id="delete<?php echo $users_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Confirm to Delete this users?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="front-user.php?action=delete&deleteid=<?php echo $users_id; ?>" class="btn btn-primary">Delete</a>
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
            <a href="front-user.php?action=add" class="btn btn-success">Add New Member</a>
          </div>
        </section>
      <?php }
      else if ($users == 'delete') { 
        if (isset($_GET['deleteid'])) {
          $delid = $_GET['deleteid'];
          $del  = "DELETE FROM users WHERE users_id = '$delid' ";
          $done = mysqli_query($db, $del);
          if ($done) {
            header("location:front-user.php?action=manage");
          }else{
            die("Failed to Delete users");
          }
        }

      }

    ?>
</div>
<!-- footer Connection -->
<?php include "inc/footer.php";?>
<!-- footer Connection -->

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
      if ($user == 'manage') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Manage All Users</h3>
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
                          <th class="text-center" scope="col">ROLE</th>
                          <th class="text-center" scope="col">STATUS</th>
                          <th class="text-center" scope="col">GENDER</th>
                          <th class="text-center" scope="col">JOIN DATE</th>
                          <th class="text-center" scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_user = "SELECT * FROM user ORDER BY user_role ASC ";
                          $send_user = mysqli_query($db,$read_user);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_user) ) {
                            $user_id        = $row['user_id'];
                            $user_image     = $row['user_image'];  
                            $user_name      = $row['user_name']; 
                            $user_email     = $row['user_email'];
                            $user_password  = $row['user_password'];
                            $user_phone     = $row['user_phone'];
                            $user_address   = $row['user_address'];
                            $user_role      = $row['user_role'];
                            $user_status    = $row['user_status'];
                            $user_gender    = $row['user_gender'];
                            $user_join_date = $row['user_join_date'];
                            $sl++;
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $sl ; ?></td>
                            <td class="text-center">
                              <?php
                                if (empty($user_image)) { ?>
                                  <img src="img/user/alt.png" alt="Profile Image" class="pro_1">
                                <?php }
                                else{ ?>
                                  <img src="img/user/<?php echo $user_image ; ?>" alt="Profile Image" class="pro_1">
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $user_name ; ?></td>
                            <td class="text-center"><?php echo $user_email ; ?></td>
                            <td class="text-center"><?php echo $user_phone ; ?></td>
                            <td class="text-center"><?php echo $user_address ; ?></td>
                            <td class="text-center">
                              <?php
                                if ($user_role == 1) { ?>
                                  <span class="badge badge-success">Super Admin</span>
                                <?php }else if ( $user_role == 2) { ?>
                                  <span class="badge badge-primary">Editor</span>
                                <?php }else{ ?>
                                  <span class="badge badge-danger">Not Selected</span>
                                <?php }
                              ?>                              
                            </td>
                            <td class="text-center">
                              <?php
                                if ($user_status == 1) { ?>
                                  <span class="badge badge-success">Active</span>
                                <?php }else if ( $user_status == 2) { ?>
                                  <span class="badge badge-Primary">Inactive</span>
                                <?php }else if ( $user_status == 3 ) { ?>
                                  <span class="badge badge-danger">Pending</span>
                                <?php }else if ( $user_status == 4 ) { ?>
                                  <span class="badge badge-warning">Disabled</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center">
                              <?php
                                if ($user_gender == 1) { ?>
                                  <span class="badge badge-success">Male</span>
                                <?php }else if ( $user_gender == 2) { ?>
                                  <span class="badge badge-success">Femle</span>
                                <?php }else if ( $user_gender == 3 ) { ?>
                                  <span class="badge badge-success">Other</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $user_join_date ; ?></td>
                            <td class="text-center">
                              <a href="user.php?action=edit&edit=<?php echo $user_id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="user.php?action=delete&deleteid=<?php echo $user_id; ?>" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $user_id; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                          <!-- Modal -->
                              <div class="modal fade" id="delete<?php echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <a href="user.php?action=add" class="btn btn-success">Add New Member</a>
          </div>
        </section>
      <?php }
      else if ($user == 'add') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="user.php?action=insert" method="POST" enctype="multipart/form-data">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Name</label>
                          <input type="name" class="form-control" id="inputEmail4" placeholder="Full Name" name="user_name" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Email</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="user_email" required="required">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="user_password" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Retype Password</label>
                          <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password" name="repassword" required="required">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-8">
                          <label for="inputPassword4">Address</label>
                          <input type="text" class="form-control" id="inputPassword4" placeholder="Address" name="user_address" required="required">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Phone Number</label>
                          <input type="text" class="form-control" id="inputPassword4" placeholder="Contact Phone Number" name="user_phone" required="required">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Role</label>
                          <select name="user_role" id="" class="form-control">
                            <option value="1">Super Admin</option>
                            <option value="2">Editor/Librarian</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Gender</label>
                          <select name="user_gender" id="" class="form-control">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputPassword4">Status</label>
                          <select name="user_status" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Pending</option>
                            <option value="4">Disabled</option>
                          </select>
                        </div>
                        <div class="form-group col-md-12">
                          <label for="exampleFormControlFile1">Profile Picture</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="user_image">
                        </div>
                      </div>
                      <button type="submit" name="user_image" class="btn btn-primary">Register</button>
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
      else if ($user == 'insert') { 
        if ( $_SERVER['REQUEST_METHOD'] = 'POST' ) {
          $user_name      = $_POST['user_name'];
          $user_email     = $_POST['user_email'];
          $user_password  = $_POST['user_password'];
          $repassword     = $_POST['repassword'];
          $user_phone     = $_POST['user_phone'];
          $user_address   = $_POST['user_address'];
          $user_role      = $_POST['user_role'];
          $user_status    = $_POST['user_status'];
          $user_gender    = $_POST['user_gender'];
           //image preparing
          $imagename    = $_FILES['user_image']['name'];
          $imagetype    = $_FILES['user_image']['type'];
          $imagesize    = $_FILES['user_image']['size'];
          $imagetemp    = $_FILES['user_image']['tmp_name'];
          //extension
          $exploded = explode('.', $imagename);
          $last_element = end($exploded);
          $imageExtention = strtolower($last_element);
          $imageAllowedExtention = array("jpg","jpeg","png");



          //form error
          $error = array();
          if ( strlen($user_name) < 4) {
            $error = "User Name is Too Short";
          }
          if ( !empty($imagename) ){
            if ( !empty($imagename) && !in_array($imageExtention, $imageAllowedExtention) ){
              $formerror = 'Invalid Image Format. Please Upload a JPG, JPEG or PNG image';
            }
            if ( !empty($imagesize) && $imagesize > 2097152 ){
              $formerror = 'Image Size is Too Large! Allowed Image size Max is 2 MB.';
            }
          }
          if ( $user_password != $repassword) {
            $error = "Password Dose Not Match";
          }
          if ( empty($imagename)) {
            $error = "Profile Picture Not Found";
          }
          if (empty($error)) {

            $img_name = rand(1, 99999).'_'.$imagename;
            move_uploaded_file($imagetemp, "img/user/$img_name");

            $sha1= sha1($pass);

            $sql = "INSERT INTO user (user_image,user_name,user_email,user_password,user_phone,user_address,user_role,user_status,user_gender,user_join_date) VALUES ('$img_name','$user_name','$user_email','$sha1','$user_phone','$user_address',$user_role,$user_status,'$user_gender',now())";
            $query = mysqli_query($db , $sql);
            if ($query) {
              header("location:user.php?action=manage");
            }else{
              die("Failed to add user ". mysqli_error($db) );
            }
          }
        }
      }
      else if ($user == 'edit') { 
          if (isset($_GET['edit'])) {
            $editid = $_GET['edit'];
            $read_user = "SELECT * FROM user WHERE user_id = '$editid' ";
            $send_user = mysqli_query($db,$read_user);
            while ($row = mysqli_fetch_assoc($send_user) ) {
              $user_id        = $row['user_id'];
              $user_image     = $row['user_image'];  
              $user_name      = $row['user_name']; 
              $user_email     = $row['user_email'];
              $user_password  = $row['user_password'];
              $user_phone     = $row['user_phone'];
              $user_address   = $row['user_address'];
              $user_role      = $row['user_role'];
              $user_status    = $row['user_status'];
              $user_gender    = $row['user_gender'];
              $user_join_date = $row['user_join_date'];
          ?>
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Edit User</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                      </div>
                      <div class="card-body" style="display: block;">
                        <form action="user.php?action=update" method="POST" enctype="multipart/form-data">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Name</label>
                              <input type="name" class="form-control" id="inputEmail4" placeholder="Full Name" name="user_name" required="required" value="<?php echo $user_name;?>" >
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Email</label>
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="user_email" required="required" value="<?php echo $user_email;?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-8">
                              <label for="inputPassword4">Address</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="Address" name="user_address" required="required" value="<?php echo $user_address;?>">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">Phone Number</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="Contact Phone Number" name="user_phone" required="required" value="<?php echo $user_phone;?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">Role</label>
                              <select name="user_role" id="" class="form-control">
                                <option value="1" <?php if( $user_role == 1 ){ echo "selected"; } ?> >Super Admin</option>
                                <option value="2" <?php if( $user_role == 2 ){ echo "selected"; } ?> >Editor/Librarian</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">Gender</label>
                              <select name="user_gender" id="" class="form-control">
                                <option value="1" <?php if( $user_gender == 1 ){ echo "selected"; } ?> >Male</option>
                                <option value="2" <?php if( $user_gender == 2 ){ echo "selected"; } ?> >Female</option>
                                <option value="3" <?php if( $user_gender == 3 ){ echo "selected"; } ?> >Other</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">Status</label>
                              <select name="user_status" id="" class="form-control">
                                <option value="1" <?php if( $user_status == 1 ){ echo "selected"; } ?> >Active</option>
                                <option value="2" <?php if( $user_status == 2 ){ echo "selected"; } ?> >Inactive</option>
                                <option value="3" <?php if( $user_status == 3 ){ echo "selected"; } ?> >Pending</option>
                                <option value="4" <?php if( $user_status == 4 ){ echo "selected"; } ?> >Disabled</option>
                              </select>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="exampleFormControlFile1">Profile Picture</label>
                              <?php
                                if (!empty($user_image)) { ?>
                                  <img src="img/user/<?php echo $user_image ; ?>" alt="" class="up_img">
                                <?php } else{
                                  echo "No Image Found";
                                }
                              ?>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="user_image">
                            </div>
                          </div>
                          <button type="submit" name="update" class="btn btn-primary">Update</button>
                          <input type="hidden" value="<?php echo $user_id; ?> " name="edit_id" >
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
      else if ($user == 'update') { 
        if ( $_SERVER['REQUEST_METHOD'] = 'POST' ) {
          $edit_id        = $_POST['edit_id'];
          $user_name      = $_POST['user_name'];
          $user_email     = $_POST['user_email'];
          $user_phone     = $_POST['user_phone'];
          $user_address   = $_POST['user_address'];
          $user_role      = $_POST['user_role'];
          $user_status    = $_POST['user_status'];
          $user_gender    = $_POST['user_gender'];
           //image preparing
          $imagename    = $_FILES['user_image']['name'];
          $imagetype    = $_FILES['user_image']['type'];
          $imagesize    = $_FILES['user_image']['size'];
          $imagetemp    = $_FILES['user_image']['tmp_name'];
          //extension
          $supportedext = array("jpg","jpeg","png");
          $nameexplode  = strtolower(end(explode('.', $imagename) ) );
          //form error
            if (!empty($imagename)) {
              $error = array();
                if ( $user_name > 4) {
                  $error = "User Name is Too Short";
                }
                if ( empty($imagename)) {
                  $error = "Profile Picture Not Found";
                }
                if (empty($error)) {
                  $remove = "SELECT * FROM user WHERE user_id='$edit_id' ";
                  $cmd    = mysqli_query($db,$remove);
                  while ($row = mysqli_fetch_assoc($cmd) ) {
                    $user_id     = $row['user_id'];
                    $user_image   = $row['user_image'];  
                  }
                  unlink("img/user/".$user_image);
    
                  $img_name = rand(1, 99999).'_'.$imagename;
                  move_uploaded_file($imagetemp, "img/user/$img_name");

                  $sql = "UPDATE user SET user_image='$img_name',user_name='$user_name',user_email='$user_email',user_phone='$user_phone',user_address='$user_address',user_role='$user_role',user_status='$user_status',user_gender='$user_gender' WHERE user_id='$edit_id'";
                  $query = mysqli_query($db , $sql);
                  if ($query) {
                    header("location:user.php?action=manage");
                  }else{
                    die("Failed to add user ". mysqli_error($db) );
                  }
                }
            }
            else{
              $error = array();
                if ( $user_name > 4) {
                  $error = "User Name is Too Short";
                }
                if (empty($error)) {
                  $sql = "UPDATE user SET user_name='$user_name',user_email='$user_email',user_phone='$user_phone',user_address='$user_address',user_role='$user_role',user_status='$user_status',user_gender='$user_gender' WHERE user_id='$edit_id' ";
                  $query = mysqli_query($db , $sql);
                  if ($query) {
                    header("location:user.php?action=manage");
                  }else{
                    die("Failed to add user ". mysqli_error($db) );
                  }
                }
            }
        }
        ?>
      <?php }
      else if ($user == 'pending') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Manage All Users</h3>
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
                          <th class="text-center" scope="col">ROLE</th>
                          <th class="text-center" scope="col">STATUS</th>
                          <th class="text-center" scope="col">GENDER</th>
                          <th class="text-center" scope="col">JOIN DATE</th>
                          <th class="text-center" scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_user = "SELECT * FROM user WHERE user_status != 1 ORDER BY user_join_date DESC  ";
                          $send_user = mysqli_query($db,$read_user);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_user) ) {
                            $user_id        = $row['user_id'];
                            $user_image     = $row['user_image'];  
                            $user_name      = $row['user_name']; 
                            $user_email     = $row['user_email'];
                            $user_password  = $row['user_password'];
                            $user_phone     = $row['user_phone'];
                            $user_address   = $row['user_address'];
                            $user_role      = $row['user_role'];
                            $user_status    = $row['user_status'];
                            $user_gender    = $row['user_gender'];
                            $user_join_date = $row['user_join_date'];
                            $sl++;
                        ?>
                          <tr>
                            <td class="text-center"><?php echo $sl ; ?></td>
                            <td class="text-center">
                              <?php
                                if (empty($user_image)) { ?>
                                  <img src="img/user/alt.png" alt="Profile Image" class="pro_1">
                                <?php }
                                else{ ?>
                                  <img src="img/user/<?php echo $user_image ; ?>" alt="Profile Image" class="pro_1">
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $user_name ; ?></td>
                            <td class="text-center"><?php echo $user_email ; ?></td>
                            <td class="text-center"><?php echo $user_phone ; ?></td>
                            <td class="text-center"><?php echo $user_address ; ?></td>
                            <td class="text-center">
                              <?php
                                if ($user_role == 1) { ?>
                                  <span class="badge badge-success">Super Admin</span>
                                <?php }else if ( $user_role == 2) { ?>
                                  <span class="badge badge-primary">Editor</span>
                                <?php }else{ ?>
                                  <span class="badge badge-danger">Not Selected</span>
                                <?php }
                              ?>                              
                            </td>
                            <td class="text-center">
                              <?php
                                if ($user_status == 1) { ?>
                                  <span class="badge badge-success">Active</span>
                                <?php }else if ( $user_status == 2) { ?>
                                  <span class="badge badge-Primary">Inactive</span>
                                <?php }else if ( $user_status == 3 ) { ?>
                                  <span class="badge badge-danger">Pending</span>
                                <?php }else if ( $user_status == 4 ) { ?>
                                  <span class="badge badge-warning">Disabled</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center">
                              <?php
                                if ($user_gender == 1) { ?>
                                  <span class="badge badge-success">Male</span>
                                <?php }else if ( $user_gender == 2) { ?>
                                  <span class="badge badge-success">Femle</span>
                                <?php }else if ( $user_gender == 3 ) { ?>
                                  <span class="badge badge-success">Other</span>
                                <?php }
                              ?>
                            </td>
                            <td class="text-center"><?php echo $user_join_date ; ?></td>
                            <td class="text-center">
                              <a href="user.php?action=edit&edit=<?php echo $user_id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                              <a href="user.php?action=delete&delete=<?php echo $user_id; ?>" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $user_id; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                          <!-- Modal -->
                              <div class="modal fade" id="delete<?php echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                      <a href="user.php?action=delete&delete=<?php echo $user_id; ?>" class="btn btn-primary">Delete</a>
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
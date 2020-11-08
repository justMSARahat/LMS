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


     
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-6">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Create New Category</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <form action="" method="POST">

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" required="required" placeholder="Category Name" name="cat_name">
                  </div>

                  <div class="form-group">
                    <label for="">Parrant Category</label>
                    <select name="cat_parrant" id="" class="form-control">
                      <option value="">Select Cateory</option>
                      <?php
                        $par_read_cat = "SELECT * FROM category WHERE cat_parrant=0 ";
                        $par_send_cat = mysqli_query($db,$par_read_cat);
                        $i=0;
                        while ($row = mysqli_fetch_assoc($par_send_cat) ) {
                          $par_cat_id     = $row['cat_id'];
                          $par_cat_name   = $row['cat_name'];  
                          $par_cat_parrant= $row['cat_parrant']; 
                      ?>
                        <option value="<?php echo $par_cat_id; ?>"><?php echo $par_cat_name; ?></option>
                      <?php  
                        }  
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="">Status</label>
                    <select name="cat_status" id="" class="form-control">
                      <option value="">Select Category status</option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                    </select>
                  </div>
                  <button class="btn btn-primary" value="Create A New Category" name="smash">Create Category</button>

                </form>
                <?php
                  if (isset($_POST['smash'])) {
                    $cat_name    = $_POST['cat_name'];
                    $cat_parrant = $_POST['cat_parrant'];
                    $cat_status  = $_POST['cat_status'];

                    $create = "INSERT INTO category (cat_name,cat_parrant,cat_status) VALUES('$cat_name','$cat_parrant','$cat_status') ";
                    $send   = mysqli_query($db, $create);
                      if ($send) {
                        header("location:category.php");
                      }else{
                        die("Failed to Add Category");
                      }
                  }
                ?>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>



          <div class="col-6">
            <?php
              if (isset($_GET['actioneid'])) {
                $editid  = $_GET['actioneid'];
                $e_read_cat = "SELECT * FROM category WHERE cat_id = '$editid' ";
                $e_send_cat = mysqli_query($db,$e_read_cat);
                while ($row = mysqli_fetch_assoc($e_send_cat) ) {
                  $cat_id     = $row['cat_id'];
                  $cat_name   = $row['cat_name'];  
                  $cat_parrant= $row['cat_parrant']; 
                  $cat_status = $row['cat_status'];
            ?>
            <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Update Category</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body" style="display: block;">
                  <form action="" method="POST">

                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" required="required" placeholder="Category Name" name="cat_name" value="<?php echo $cat_name; ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Parrant Category</label>
                      <select name="cat_parrant" id="" class="form-control">
                        <option value="" <?php if( $cat_parrant == 0 ){echo 'selected';}?> >Primary</option>
                        <?php
                          $par_read_cat = "SELECT * FROM category WHERE cat_parrant=0 ";
                          $par_send_cat = mysqli_query($db,$par_read_cat);
                          while ($row = mysqli_fetch_assoc($par_send_cat) ) {
                            $par_cat_id     = $row['cat_id'];
                            $par_cat_name   = $row['cat_name'];  
                            $par_cat_parrant= $row['cat_parrant']; 
                        ?>
                          <option value="<?php echo $par_cat_id; ?>" <?php if($par_cat_id == $cat_parrant){echo 'selected';}?> ><?php echo $par_cat_name; ?></option>
                        <?php  
                          }  
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="">Status</label>
                      <select name="cat_status" id="" class="form-control">
                        <option value="1" <?php if( $cat_status==1 ){ echo "selected"; }?> >Active</option>
                        <option value="2" <?php if( $cat_status==2 ){ echo "selected"; }?> >Inactive</option>
                      </select>
                    </div>
                    <button class="btn btn-primary" value="Create A New Category" name="smasha">Create Category</button>

                  </form>
                  <?php
                    if (isset($_POST['smasha'])) {
                      $cat_name    = $_POST['cat_name'];
                      $cat_parrant = $_POST['cat_parrant'];
                      $cat_status  = $_POST['cat_status'];

                      $update = "UPDATE category SET cat_name='$cat_name',cat_parrant='$cat_parrant',cat_status='$cat_status' WHERE cat_id= '$editid' ";
                      $senda   = mysqli_query($db, $update);
                        if ($senda) {
                          header("location:category.php");
                        }else{
                          die("Failed to Add Category");
                        }
                    }
                  ?>


                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
            <?php    
                }  
              }
            ?>


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage All Category</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="text-center" scope="col">Name</th>
                      <th class="text-center" scope="col">Primary</th>
                      <th class="text-center" scope="col">Status</th>
                      <th class="text-center" scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      $read_cat = "SELECT * FROM category ORDER BY cat_parrant ASC ";
                      $send_cat = mysqli_query($db,$read_cat);
                      while ($row = mysqli_fetch_assoc($send_cat) ) {
                        $cat_id     = $row['cat_id'];
                        $cat_name   = $row['cat_name'];  
                        $cat_parrant= $row['cat_parrant']; 
                        $cat_status = $row['cat_status'];
                        $i++;
                    ?>
                      <tr>
                        <td class="text-center" ><?php echo $cat_name; ?></td>
                        <td class="text-center" >
                          <?php
                            if ($cat_parrant == 0) { ?>
                              <span class="badge badge-success">Primary</span>
                            <?php }
                            else{
                              $read_sub_cat = "SELECT * FROM category WHERE cat_id='$cat_parrant' ";
                              $send_sub_cat = mysqli_query($db,$read_sub_cat);
                              $i=0;
                              while ($row = mysqli_fetch_assoc($send_sub_cat) ) {
                                $sub_cat_id     = $row['cat_id'];
                                $sub_cat_name   = $row['cat_name'];  
                                $sub_cat_parrant= $row['cat_parrant']; 
                                $sub_cat_status = $row['cat_status'];
                                $i++;
                            ?>
                              <span class="badge badge-primary"><?php echo $sub_cat_name; ?></span>
                            <?php  } } ?>                        
                        </td>
                        <td class="text-center" >
                          <?php
                            if ($cat_status == 1) { ?>
                              <span class="badge badge-success">Active</span>
                            <?php }else{ ?>
                              <span class="badge badge-danger">Inactive</span>
                            <?php } ?>
                        </td>
                        <td class="text-center" >
                          <a href="category.php?actioneid=<?php echo $cat_id ;?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                          <a href="category.php?actiondid=<?php echo $cat_id ;?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    <!-- Modal -->
                    <?php  } //while loop ending ?>
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

    <?php
      if (isset($_GET['actiondid'])) {
        $delid = $_GET['actiondid'];
        $del  = "DELETE FROM category WHERE cat_id = '$delid' ";
        $done = mysqli_query($db, $del);
        if ($done) {
          header("location:category.php");
        }else{
          die("Failed to Delete Category");
        }
      }
    ?> 




</div>
<!-- footer Connection -->
<?php include "inc/footer.php";?>
<!-- footer Connection -->
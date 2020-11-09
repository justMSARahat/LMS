
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
      $lib = isset($_GET['action']) ? $_GET['action'] : 'manage' ; 
      if ($lib == 'manage') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Manage Library</h3>
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
                          <th class="text-center" scope="col">NAME</th>
                          <th class="text-center" scope="col">CATEGORY</th>
                          <th class="text-center" scope="col">WRITER</th>
                          <th class="text-center" scope="col">PUBLISHER</th>
                          <th class="text-center" scope="col">STOCK</th>
                          <th class="text-center" scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_user = "SELECT * FROM book WHERE trash = 0 ORDER BY book_title ASC ";
                          $send_user = mysqli_query($db,$read_user);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_user) ) {
                            $book_id      = $row['book_id'];
                            $book_title   = $row['book_title'];  
                            $book_desc    = $row['book_desc']; 
                            $book_cat     = $row['book_cat'];
                            $book_writer  = $row['book_writer'];
                            $book_pub     = $row['book_pub'];
                            $book_rel     = $row['book_rel'];
                            $book_img     = $row['book_img'];
                            $stock        = $row['stock'];
                            $sl++;
                        ?>
                          <tr class="text-center">
                            <td><?php echo $sl ; ?></td>
                            <td><?php echo $book_title ; ?></td>
                            <td>
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
                            <td><?php echo $book_writer ; ?></td>
                            <td><?php echo $book_pub ; ?></td>
                            <td><?php echo $stock ; ?></td>
                            <td>
                              <a href="lib.php?viewid=<?php echo $book_id; ?>" class="btn btn-success" data-toggle="modal" data-target="#viwe<?php echo $book_id;?>"><i class="fas fa-eye"></i></a>

                              <a href="lib.php?action=edit&eid=<?php echo $book_id; ?>" class="btn btn-primary" ><i class="fas fa-edit"></i></a>

                              <a href="lib.php?action=trash&tid=<?php echo $book_id; ?>" class="btn btn-danger"  ><i class="fas fa-trash"></i></a>
                            </td>
                          </tr>
                          
                          <!-- View Modal -->
                            <div class="modal fade" id="viwe<?php echo $book_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Book Preview</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    
                                    <div class="">
                                      
                                      <div class="form-group row text-right">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Book Name</label>
                                        <div class="col-sm-8">
                                          <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $book_title; ?>" name="name">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Book Description</label>
                                        <div class="col-sm-8 md_1" >
                                          <textarea readonly class="form-control" id="staticEmail" rows="3">
                                            <?php echo $book_desc; ?>
                                          </textarea>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row text-right ">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Book Category</label>
                                        <div class="col-sm-8">
                                          <?php 
                                            $read_cat = "SELECT * FROM category WHERE cat_id = '$book_cat'  ";
                                            $send_cat = mysqli_query($db,$read_cat);
                                            while ($row = mysqli_fetch_assoc($send_cat) ) {
                                              $cat_id      = $row['cat_id'];
                                              $cat_name      = $row['cat_name'];
                                            }  
                                          ?>
                                          <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $cat_name; ?>" name="name">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row text-right">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Book Writer</label>
                                        <div class="col-sm-8">
                                          <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $book_writer; ?>" name="name">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row text-right">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Book Publication</label>
                                        <div class="col-sm-8">
                                          <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $book_pub; ?>" name="name">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row text-right">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Release Date</label>
                                        <div class="col-sm-8">
                                          <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $book_rel; ?>" name="name">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row text-right">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">Image</label>
                                        <div class="col-sm-8">
                                          <img src="img/shop/<?php echo $book_img;?>" alt="" class="up_img" >
                                        </div>
                                      </div>




                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                        <?php  } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <a href="lib.php?action=add" class="btn btn-success">Register New Book</a>
          </div>
        </section>
      <?php }
      else if ($lib == 'add') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Issue New Book</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>

                  <div class="card-body" style="display: block;">
                    <form action="lib.php?action=insert" method="POST" enctype="multipart/form-data">
                      
                      <div class="form-row">
                        <div class="form-group col-md-9">
                          <label for="inputEmail4">Book Name</label>
                          <input type="name" class="form-control" id="inputEmail4" placeholder="Book Name" name="name" required="required">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">Book Category</label>
                          <select name="cat" id="" class="form-control">
                            <option value="">Select Category</option>
                              <?php 
                                $read_cat = "SELECT * FROM category";
                                $send_cat = mysqli_query($db,$read_cat);
                                while ($row = mysqli_fetch_assoc($send_cat) ) {
                                  $cat_id      = $row['cat_id'];
                                  $cat_name      = $row['cat_name'];
                               ?>
                            <option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                               <?php
                                }  
                              ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="">Description</label>
                          <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Writer</label>
                          <input type="text" class="form-control" id="" placeholder="Book Writer" name="writer" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Publication</label>
                          <input type="text" class="form-control" id="" placeholder="Publication" name="pub" required="required">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Stock</label>
                          <input type="number" class="form-control" id="" placeholder="Stock" name="stock" required="required">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">Meta Tag</label>
                          <input type="text" class="form-control" id="" placeholder="Meta Tag" name="meta" required="required">
                        </div>
                        <div class="form-group col-md-12">
                          <label for="">Cover Picture</label>
                          <input type="file" class="form-control-file" id="" name="image">
                        </div>
                      </div>

                      <button type="submit" name="sub" class="btn btn-primary">Add New</button>

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
      else if ($lib == 'insert') { 
        if ( $_SERVER['REQUEST_METHOD'] = 'POST' ) {
          $name        = $_POST['name'];
          $cat         = $_POST['cat'];
          $description = $_POST['description'];
          $writer      = $_POST['writer'];
          $pub         = $_POST['pub'];
          $stock       = $_POST['stock'];
          $meta        = $_POST['meta'];
           //image preparing
          $imagename    = $_FILES['image']['name'];
          $imagetype    = $_FILES['image']['type'];
          $imagesize    = $_FILES['image']['size'];
          $imagetemp    = $_FILES['image']['tmp_name'];
          //extension
          $exploded = explode('.', $imagename);
          $last_element = end($exploded);
          $imageExtention = strtolower($last_element);
          $imageAllowedExtention = array("jpg","jpeg","png");
          //form error
          $error = array();
          if ( !empty($imagename) ){
            if ( !empty($imagename) && !in_array($imageExtention, $imageAllowedExtention) ){
              $formerror = 'Invalid Image Format. Please Upload a JPG, JPEG or PNG image';
            }
            if ( !empty($imagesize) && $imagesize > 2097152 ){
              $formerror = 'Image Size is Too Large! Allowed Image size Max is 2 MB.';
            }
          }
          if ( empty($imagename)) {
            $error = "Profile Picture Not Found";
          }
          if (empty($error)) {


            $img_name = rand(1, 99999).'_'.$imagename;
            move_uploaded_file($imagetemp, "img/shop/$img_name");

            $sql = "INSERT INTO book (book_title,book_desc,book_cat,book_writer,book_pub,stock,book_rel,book_meta,book_img) VALUES('$name','$description','$cat','$writer','$pub','$stock',now(),'$meta','$img_name')";
            $query = mysqli_query($db , $sql);
            if ($query) {
              header("location:lib.php?action=manage");
            }else{
              die("Failed to Issue a New Book ". mysqli_error($db) );
            }
          }
        }
      }
      else if ($lib == 'edit') { 
          if (isset($_GET['eid'])) {
            $editid = $_GET['eid'];
            $read_user = "SELECT * FROM book WHERE book_id = '$editid' ";
            $send_user = mysqli_query($db,$read_user);
            while ($row = mysqli_fetch_assoc($send_user) ) {
              $book_id     = $row['book_id'];
              $book_title  = $row['book_title'];
              $book_desc   = $row['book_desc'];
              $book_cat    = $row['book_cat'];
              $book_writer = $row['book_writer'];
              $book_pub    = $row['book_pub'];
              $stock       = $row['stock'];
              $book_rel    = $row['book_rel'];
              $book_meta   = $row['book_meta'];
              $book_img    = $row['book_img'];
              $trash       = $row['trash'];
          ?>
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">EDIT BOOK DETAILS</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                      </div>

                      <div class="card-body" style="display: block;">
                        <form action="lib.php?action=update" method="POST" enctype="multipart/form-data">
                          
                          <div class="form-row">
                            <div class="form-group col-md-9">
                              <label for="inputEmail4">Book Name</label>
                              <input type="name" class="form-control" id="inputEmail4" placeholder="Book Name" name="name" required="required" value="<?php echo $book_title; ?>" >
                            </div>
                            <div class="form-group col-md-3">
                              <label for="inputEmail4">Book Category</label>
                              <select name="cat" id="" class="form-control">
                                  <?php 
                                    $read_cat = "SELECT * FROM category";
                                    $send_cat = mysqli_query($db,$read_cat);
                                    while ($row = mysqli_fetch_assoc($send_cat) ) {
                                      $cat_id      = $row['cat_id'];
                                      $cat_name      = $row['cat_name'];
                                   ?>
                                <option value="<?php echo $cat_id; ?>" <?php if($book_cat == $cat_id){ echo "selected";} ?> ><?php echo $cat_name; ?></option>
                                   <?php
                                    }  
                                  ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="">Description</label>
                              <textarea name="description" class="form-control" id="" cols="30" rows="3"><?php echo $book_desc; ?>" ></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Writer</label>
                              <input type="text" class="form-control" id="" placeholder="Book Writer" name="writer" required="required" value="<?php echo $book_writer; ?>" >
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">Publication</label>
                              <input type="text" class="form-control" id="" placeholder="Publication" name="pub" required="required" value="<?php echo $book_pub; ?>" >
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Stock</label>
                              <input type="number" class="form-control" id="" placeholder="Stock" name="stock" required="required" value="<?php echo $stock; ?>" >
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">Meta Tag</label>
                              <input type="text" class="form-control" id="" placeholder="Meta Tag" name="meta" required="required" value="<?php echo $book_meta; ?>" >
                            </div>
                            <div class="form-group col-md-12">
                              <label for="">Cover Picture</label>
                                <input type="file" class="form-control-file" id="" name="image">
                              <?php
                                if (!empty($book_img)) { ?>
                                  <img src="img/shop/<?php echo $book_img ; ?>" alt="" class="up_img">
                                <?php } else{
                                  echo "No Image Found";
                                }
                              ?>
                            </div>
                          </div>
                          <button type="submit" name="sub" class="btn btn-primary">UPDATE</button>
                          <input type="hidden" value="<?php echo $book_id; ?>" name="book_id_up" >
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
        }
      else if ($lib == 'update') { 
        if ( $_SERVER['REQUEST_METHOD'] = 'POST' ) {
          $eid        = $_POST['book_id_up'];
          $name        = $_POST['name'];
          $cat         = $_POST['cat'];
          $description = $_POST['description'];
          $writer      = $_POST['writer'];
          $pub         = $_POST['pub'];
          $stock       = $_POST['stock'];
          $meta        = $_POST['meta'];
           //image preparing
          $imagename    = $_FILES['image']['name'];
          $imagetype    = $_FILES['image']['type'];
          $imagesize    = $_FILES['image']['size'];
          $imagetemp    = $_FILES['image']['tmp_name'];
          //extension
          $exploded = explode('.', $imagename);
          $last_element = end($exploded);
          $imageExtention = strtolower($last_element);
          $imageAllowedExtention = array("jpg","jpeg","png");
          //form error
            if (!empty($imagename)) {
              $error = array();
                if ( !empty($imagename) ){
                  if ( !empty($imagename) && !in_array($imageExtention, $imageAllowedExtention) ){
                    $formerror = 'Invalid Image Format. Please Upload a JPG, JPEG or PNG image';
                  }
                  if ( !empty($imagesize) && $imagesize > 2097152 ){
                    $formerror = 'Image Size is Too Large! Allowed Image size Max is 2 MB.';
                  }
                }
                if ( empty($imagename)) {
                  $error = "Profile Picture Not Found";
                }
                if (empty($error)) {
                  $remove = "SELECT * FROM book WHERE book_id='$eid' ";
                  $cmd    = mysqli_query($db,$remove);
                  while ($row = mysqli_fetch_assoc($cmd) ) {
                    $book_id     = $row['book_id'];
                    $book_img    = $row['book_img'];  
                  }
                  unlink("img/shop/".$book_img);
    
                  $img_name = rand(1, 99999).'_'.$imagename;
                  move_uploaded_file($imagetemp, "img/shop/$img_name");

                  $sql = "UPDATE book SET book_title='$name',book_desc='$description',book_cat='$cat',book_writer='$writer',book_pub='$pub',stock='$stock',book_meta='$meta',book_img='$img_name',trash='0' WHERE book_id = '$eid' ";
                  $query = mysqli_query($db , $sql);
                  if ($query) {
                    header("location:lib.php?action=manage");
                  }else{
                    die("Failed to Edit Book Info ". mysqli_error($db) );
                  }
                }
            }
            else{ 
              $sql = "UPDATE book SET book_title='$name',book_desc='$description',book_cat='$cat',book_writer='$writer',book_pub='$pub',stock='$stock',book_meta='$meta',trash='0' WHERE book_id = '$eid' ";
              $query = mysqli_query($db , $sql);
              if ($query) {
                header("location:lib.php?action=manage");
              }else{
                die("Failed to Edit Book Info ". mysqli_error($db) );
              }
            }
        }
        ?>
      <?php }
      else if ($lib == 'trash') {
        if (isset($_GET['tid']) ) {
          $tid   = $_GET['tid'];
          $sql   = "UPDATE book SET trash=1 WHERE book_id='$tid' "; 
          $don   = mysqli_query($db, $sql);
          if ($don) {
            header("location:lib.php?action=manage");
          }else{
            die("Failed to Delete Book");
          }

        }
      }
      else if ($lib == 'pending') { ?>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Trash</h3>
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
                          <th class="text-center" scope="col">NAME</th>
                          <th class="text-center" scope="col">CATEGORY</th>
                          <th class="text-center" scope="col">WRITER</th>
                          <th class="text-center" scope="col">PUBLISHER</th>
                          <th class="text-center" scope="col">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $read_user = "SELECT * FROM book WHERE trash = 1 ORDER BY book_title ASC ";
                          $send_user = mysqli_query($db,$read_user);
                          $sl = 0;
                          while ($row = mysqli_fetch_assoc($send_user) ) {
                            $book_id      = $row['book_id'];
                            $book_title   = $row['book_title'];  
                            $book_desc    = $row['book_desc']; 
                            $book_cat     = $row['book_cat'];
                            $book_writer  = $row['book_writer'];
                            $book_pub     = $row['book_pub'];
                            $book_rel     = $row['book_rel'];
                            $book_img     = $row['book_img'];
                            $sl++;
                        ?>
                          <tr class="text-center">
                            <td><?php echo $sl ; ?></td>
                            <td><?php echo $book_title ; ?></td>
                            <td>
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
                            <td><?php echo $book_writer ; ?></td>
                            <td><?php echo $book_pub ; ?></td>
                            <td>
                              <a href="lib.php?action=redo&rid=<?php echo $book_id;?>" class="btn btn-success"><i class="fas fa-redo"></i></a>
                              <a href="lib.php?action=delete&did=<?php echo $book_id;?>" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $book_id; ?>"><i class="fas fa-trash"></i></a>
                            </td>
                            <!-- Modal -->
                              <div class="modal fade" id="delete<?php echo $book_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Are You Sure to Delete This Book?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <a href="lib.php?action=delete&did=<?php echo $book_id;?>"><button type="button" class="btn btn-danger">Delete</button></a>
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
        </section>
      <?php }
      else if ($lib == 'redo') { 
        if (isset($_GET['rid']) ) {
          $tid   = $_GET['rid'];
          $sql   = "UPDATE book SET trash=0 WHERE book_id='$tid' "; 
          $don   = mysqli_query($db, $sql);
          if ($don) {
            header("location:lib.php?action=manage");
          }else{
            die("Failed to Delete Book");
          }
        }
      }
      else if ($lib == 'delete') { 
        if (isset($_GET['did'])) {
          $delid = $_GET['did'];
          $del  = "DELETE FROM book WHERE book_id = '$delid'";
          $done = mysqli_query($db, $del);
          if ($done) {
            header("location:lib.php?action=pending");
          }else{
            die("Failed to Delete Book");
          }
        }
      }
    ?>
</div>
<!-- footer Connection -->
<?php include "inc/footer.php";?>
<!-- footer Connection -->
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
                  <?php
                    $read   = "SELECT * FROM settings";
                    $update = mysqli_query($db,$read);
                    while ($row = mysqli_fetch_assoc($update) ) {
                      $id        = $row['id'];
                      $name      = $row['name'];
                      $address   = $row['address'];  
                      $email     = $row['email']; 
                      $phone     = $row['phone'];
                      $logo      = $row['logo'];
                      $favicon   = $row['favicon'];
                      $currency  = $row['currency'];
                      $terms     = $row['terms'];
                  ?>  

                    <form method="POST" action="" enctype="multipart/form-data">
                      <div class="text-right">
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Institute Name</label>
                          <div class="col-sm-10">
                            <input type="text"  class="form-control" id="staticEmail" value="<?php echo $name; ?>" name="name">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Institute Address</label>
                          <div class="col-sm-10">
                            <input type="text"  class="form-control" id="staticEmail" value="<?php echo $address; ?>" name="address">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Institute Email</label>
                          <div class="col-sm-10">
                            <input type="text"  class="form-control" id="staticEmail" value="<?php echo $email; ?>" name="email">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Institute Mobile</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" value="<?php echo $phone; ?>" name="phone">
                          </div>
                        </div>


                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Currency</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" value="<?php echo $currency; ?>"  name="currency">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Terms & Conditions</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" value="<?php echo $terms; ?>" name="terms">
                          </div>
                        </div>
                      </div>
                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label text-right">Logo</label>
                          <div class="col-sm-10">
                            <?php
                              if ( !empty($logo) ) { ?>
                                <img src="img/website/<?php echo $logo; ?>" alt="" class="logo">
                              <?php }
                            ?>
                            <input type="file" class="form-control-files" id="staticEmail" value="<?php echo $phone; ?>" name="logo">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="staticEmail" class="col-sm-2 col-form-label text-right">Favicon</label>
                          <div class="col-sm-10">
                            <?php
                              if ( !empty($favicon) ) { ?>
                                <img src="img/website/<?php echo $favicon; ?>" alt="" class="Favicon">
                              <?php }
                            ?>
                            <input type="file" class="form-control-files" id="staticEmail" value="<?php echo $phone; ?>" name="favicon">
                          </div>
                        </div>

                      <div class="form-group text-center"  >
                        <input type="submit" class="btn btn-primary text-center mx-auto" value="Update Website settings" name="Update">
                      </div>
                    </form>

                    <?php 
                      if (isset($_GET['Update'])) {
                        $name      = $_POST['name'];
                        $address   = $_POST['address'];  
                        $email     = $_POST['email']; 
                        $phone     = $_POST['phone'];
                        $currency  = $_POST['currency'];
                        $terms     = $_POST['terms'];
                        $logo      = $_POST['logo']['name'];
                        $logotmp      = $_POST['logo']['tmp_name'];
                        $favicon   = $_POST['favicon']['name'];
                        $favicontmp   = $_POST['favicon']['tmp_name'];
                      
if (!empty($logo) && !empty($favicon) ) {
              $remove = "SELECT * FROM settings";
              $cmd    = mysqli_query($db,$remove);
              while ($row = mysqli_fetch_assoc($cmd) ) {
                $logo    = $row['logo']; 
                $favicon = $row['favicon']; 
              }
              unlink("img/website/".$logo);
              unlink("img/website/".$favicon);

              $icon = rand(1, 99999).'_'.$logo;
              move_uploaded_file($logotmp, "img/website/$logo");
              
              $favicon = rand(1, 99999).'_'.$favicon;
              move_uploaded_file($favicontmp, "img/website/$favicon");

              $sql = "UPDATE settings SET name='$name',address='$address',email='$email',phone='$phone',logo='$icon',favicon='$favicon',currency='$currency',terms='$terms' WHERE id = 1";
              $query = mysqli_query($db , $sql);
              if ($query) {
                header("location:settings.php");
              }else{
                die("Failed". mysqli_error($db) );
              }
            }


                      }
                     ?>




                  <?php  } ?>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
          </div>
        </section>

       








</div>
<!-- footer Connection -->
<?php include "inc/footer.php";?>
<!-- footer Connection -->
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM book";
                  $query= mysqli_query($db,$sql);
                  $ac1 = mysqli_num_rows($query);
                 ?>
                <h3><?php echo $ac1; ?></h3>

                <p>Books</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM category";
                  $query1= mysqli_query($db,$sql);
                  $ac2 = mysqli_num_rows($query1);
                 ?>
                <h3><?php echo $ac2; ?></h3>


                <p>Total Categorys</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM users";
                  $query2= mysqli_query($db,$sql);
                  $ac2 = mysqli_num_rows($query2);
                 ?>
                <h3><?php echo $ac2; ?></h3>


                <p>Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM user";
                  $query3= mysqli_query($db,$sql);
                  $ac3 = mysqli_num_rows($query3);
                 ?>
                <h3><?php echo $ac3; ?></h3>


                <p>Admins</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM manage";
                  $query4= mysqli_query($db,$sql);
                  $ac4 = mysqli_num_rows($query4);
                 ?>
                <h3><?php echo $ac4; ?></h3>


                <p>Book Booked</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM manage WHERE is_returned = 1 ";
                  $query5= mysqli_query($db,$sql);
                  $ac5 = mysqli_num_rows($query5);
                 ?>
                <h3><?php echo $ac5; ?></h3>


                <p>Book Pending to Return</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM user WHERE user_role != 1 ";
                  $query7= mysqli_query($db,$sql);
                  $ac7 = mysqli_num_rows($query7);
                 ?>
                <h3><?php echo $ac7; ?></h3>


                <p>Total Editor</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                  $sql = "SELECT * FROM user WHERE user_status != 1 ";
                  $query8= mysqli_query($db,$sql);
                  $ac8 = mysqli_num_rows($query8);
                 ?>
                <h3><?php echo $ac8; ?></h3>

                <p>Pending Editors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

<!-- footer Connection -->
<?php include "inc/footer.php";?>
<!-- footer Connection -->
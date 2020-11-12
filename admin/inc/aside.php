  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user/<?php echo $_SESSION['user_image'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user_name'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="main.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-header">Library Feature</li>
 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Books
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lib.php?action=manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage All Books</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lib.php?action=add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Books</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="lib.php?action=pending" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trash</p>
                </a>
              </li>
            </ul>
          </li> 

          <li class="nav-item">
            <a href="category.php" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <p>Category</p>
            </a>
          </li>    
 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Library Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage.php?action=or" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ordered</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage.php?action=re" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Returned</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage.php?action=inv" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoices</p>
                </a>
              </li>
            </ul>
          </li> 


          <li class="nav-header">Backend Feature</li>    
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Front End Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="front-user.php?action=manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage All User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="front-user.php?action=add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="front-user.php?action=pending" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending User</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user.php?action=manage" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage All User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user.php?action=add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user.php?action=pending" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <?php 
              $sql = "SELECT * FROM settings";
              $que = mysqli_query($db,$sql);
              while ($row = mysqli_fetch_assoc($que) ) {
                $id = $row['id'];
              }
             ?>
            <a href="settings.php?website=<?php echo $id; ?>" class="nav-link">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>Settings</p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li> 
        
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
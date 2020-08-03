<?php
// session_start();
require_once '../../config/utils.php';

$loggedInUser = $_SESSION[AUTH];
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= BASE_URL ?>" class="brand-link">
    <img src="<?= ADMIN_ASSET_URL ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">SPARTA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <?php if ($loggedInUser): ?>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= ADMIN_ASSET_URL ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $loggedInUser['fullname']?></a>
      </div>
    </div>
    <?php endif ?>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="<?= ADMIN_URL . 'dashboard/'?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../users/add.php" class="nav-link">
                  <i class="fa fa-plus"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../users/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-sliders-h"></i>
              <p>
                Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../slider/add.php" class="nav-link">
                  <i class="fa fa-plus"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../slider/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-blog"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../blog/add.php" class="nav-link">
                  <i class="fa fa-plus"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../blog/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-cogs"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../web-setting/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-smile-wink"></i>
              <p>
                Welcome
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../welcome/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-server"></i>
              <p>
                service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../sever/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-bars"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../category/add.php" class="nav-link">
                  <i class="fa fa-plus"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../category/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-hotel"></i>
              <p>
                Room
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../room/add.php" class="nav-link">
                  <i class="fa fa-plus"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../room/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-comment"></i>
              <p>
                Comment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../comment/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-user-edit"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../contact/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-money-bill-wave"></i>
              <p>
                Booking
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../booking/index.php" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>list</p>
                </a>
              </li>
            </ul>
          </li>
          <a href="<?php echo BASE_URL . 'logout.php'?>" class="nav-link">
            <i class="fa fa-sign-out-alt"></i>
            <p>
              Logout
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
    <!-- /.sidebar -->
</aside>
<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();


$countUserQuery = "select count(*) as total from users";
$countUser = queryExecute($countUserQuery);

$countSliderQuery = "select count(*) as total from slidesshow";
$countSlider = queryExecute($countSliderQuery);

$countBlogQuery = "select count(*) as total from blogs";
$countBlog = queryExecute($countBlogQuery);

$countSettingQuery = "select count(*) as total from web_settings";
$countSetting = queryExecute($countSettingQuery);

$countwelcomeQuery = "select count(*) as total from welcomes";
$countwelcome = queryExecute($countwelcomeQuery);

$countserviceQuery = "select count(*) as total from hotel_service";
$countservice = queryExecute($countserviceQuery);

$countcategoryQuery = "select count(*) as total from categories";
$countcategory = queryExecute($countcategoryQuery);

$countroomQuery = "select count(*) as total from rooms";
$countroom = queryExecute($countroomQuery);

$countCommentQuery = "select count(*) as total from comment";
$countcomment = queryExecute($countCommentQuery);

$countContactQuery = "select count(*) as total from contact";
$countcontact = queryExecute($countContactQuery);

$countBookingQuery = "select count(*) as total from booking";
$countbooking = queryExecute($countBookingQuery);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Sparta</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once '../_share/css.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php include_once '../_share/header.php'; ?>
  <!-- Navbar -->
  <?php include_once '../_share/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


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
              <li class="breadcrumb-item active">Dashboard</li>
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
                <h3><?= $countUser['total']?></h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="../users/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $countSlider['total']?></h3>

                <p>Slider</p>
              </div>
              <div class="icon">
                <i class="fa fa-sliders-h"></i>
              </div>
              <a href="../slider/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $countBlog['total']?></h3>

                <p>Blog</p>
              </div>
              <div class="icon">
                <i class="fa fa-blog"></i>
              </div>
              <a href="../blog/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $countSetting['total']?></h3>

                <p>Setting</p>
              </div>
              <div class="icon">
                <i class="fa fa-cogs"></i>
              </div>
              <a href="../web-setting/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $countwelcome['total']?></h3>

                <p>welcome</p>
              </div>
              <div class="icon">
                <i class="fa fa-smile-wink"></i>
              </div>
              <a href="../welcome/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $countservice['total']?></h3>

                <p>service</p>
              </div>
              <div class="icon">
                <i class="fa fa-server"></i>
              </div>
              <a href="../sever/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $countcategory['total']?></h3>

                <p>Category</p>
              </div>
              <div class="icon">
                <i class="fa fa-bars"></i>
              </div>
              <a href="../category/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $countroom['total']?></h3>

                <p>Room</p>
              </div>
              <div class="icon">
                <i class="fa fa-hotel"></i>
              </div>
              <a href="../room/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $countcomment['total']?></h3>

                <p>Comment</p>
              </div>
              <div class="icon">
                <i class="fa fa-comment"></i>
              </div>
              <a href="../comment/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $countcontact['total']?></h3>

                <p>Contact</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-edit"></i>
              </div>
              <a href="../contact/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $countbooking['total']?></h3>

                <p>Booking</p>
              </div>
              <div class="icon">
                <i class="fa fa-money-bill-wave"></i>
              </div>
              <a href="../booking/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once '../_share/footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <?php include_once '../_share/js.php'; ?>
  

</body>
</html>

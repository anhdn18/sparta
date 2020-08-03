<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

 ?>

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
            <h1 class="m-0 text-dark">Category Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form id="add-category-form" action="<?= ADMIN_URL . 'category/save-add.php'?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name">
                        <?php if(isset($_GET['titleerr'])):?>
                        <label class="error"><?= $_GET['titleerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Noi Dung<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="descs">
                    </div>                    
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'category'?>" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
      </div>




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

<script>
    $('#add-category-form').validate({
        rules:{
            name: {
                required: true,
            },            
            descs: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Hãy nhập ten danh muc",
            },
            descs: {
                required: "Hãy nhập noi dung",
            },
        }
    });
</script>
</body>
</html>
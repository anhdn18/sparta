<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$categoryId = isset($_GET['id']) ? $_GET['id'] : -1;
$sql = "select * from categories where id = $categoryId";
$category = queryExecute($sql, false);

if(!$category){
    header("location: " . ADMIN_URL . 'category?msg=category tồn tại');die;
}
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
            <h1 class="m-0 text-dark">Category Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <main class="container">
        <form id="edit-category-form" action="<?= ADMIN_URL . 'category/save-edit.php'?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $category['id'] ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" value="<?= $category['name']?>">
                        <?php if(isset($_GET['titleerr'])):?>
                            <label class="error"><?= $_GET['titleerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">sub<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="descs" value="<?= $category['descs']?>">
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'category'?>" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>


    </main>
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
    $('#edit-category-form').validate({
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
                required: "Hãy nhập danh muc",
            },
            descs: {
                required: "Hãy nhập noi dung",
            },
        }
    });
</script>
</body>
</html>
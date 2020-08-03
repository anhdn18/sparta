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
            <h1 class="m-0 text-dark">Slider Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form id="add-slider-form" action="<?= ADMIN_URL . 'slider/save-add.php'?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title">
                        <?php if(isset($_GET['titleerr'])):?>
                        <label class="error"><?= $_GET['titleerr']?></label>
                        <?php endif; ?>
                    </div>                    
                    <div class="form-group">
                        <label for="">Sub<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="sub">
                        <?php if(isset($_GET['suberr'])):?>
                        <label class="error"><?= $_GET['suberr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh<span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="image" onchange="encodeImageFileAsURL(this)">
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'slider'?>" class="btn btn-danger">Hủy</a>
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
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $('#preview-img').attr('src', "<?= DEFAULT_IMAGE ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
    $('#add-slider-form').validate({
        rules:{
            title: {
                required: true,
                maxlength: 191
            },            
            sub: {
                required: true,
                maxlength: 100
            },
            image: {
                required: true,
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            title: {
                required: "Hãy nhập Title",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            sub: {
                required: "Hãy nhập Sub",
                maxlength: "Số lượng ký tự tối đa bằng 100 ký tự"
            },
            image: {
                required: "Hãy nhập ảnh",
                extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
</body>
</html>
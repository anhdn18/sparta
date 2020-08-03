<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$settingId = isset($_GET['id']) ? $_GET['id'] : -1;
$sql = "select * from web_settings where id = $settingId";
$setting = queryExecute($sql, false);

if(!$setting){
    header("location: " . ADMIN_URL . 'web-setting?msg=setting tồn tại');die;
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
            <h1 class="m-0 text-dark">Setting Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <main class="container">
        <form id="edit-slider-form" action="<?= ADMIN_URL . 'web-setting/save-edit.php'?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $setting['id'] ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email" value="<?= $setting['email']?>">
                        <?php if(isset($_GET['emailerr'])):?>
                            <label class="error"><?= $_GET['emailerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Address<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="address" value="<?= $setting['address']?>">
                    </div>
                    <div class="form-group">
                      <label for="">Hotline<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="hotline" value="<?= $setting['hotline']?>">
                    </div>
                    <div class="form-group">
                      <label for="">Map<span class="text-danger">*</span></label>
                      <textarea name="map" class="form-control"><?= $setting['map']?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="<?= BASE_URL . $setting['logo'] ?>" id="preview-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="file" class="form-control" name="logo" onchange="encodeImageFileAsURL(this)">
                    </div>

                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'web-setting'?>" class="btn btn-danger">Hủy</a>
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
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $('#preview-img').attr('src', "<?= BASE_URL . $setting['logo'] ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
    $('#edit-slider-form').validate({
        rules:{
            email: {
                required: true,
                maxlength: 191,
                email: true,
            },
            address: {
              required: true,
            },
            hotline: {
              required: true,
            },
            logo: {
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            email: {
                required: "Hãy nhập email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email"
            },
            address: {
              required: "Hãy nhập address",
            },
            hotline: {
              required: "Hãy nhập hotline",
            },
            logo: {
                extension: "Hãy nhập đúng định dạng logo (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
</body>
</html>
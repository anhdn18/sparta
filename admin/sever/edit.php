<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$serviceId = isset($_GET['id']) ? $_GET['id'] : -1;
$sql = "select * from hotel_service where id = $serviceId";
$service = queryExecute($sql, false);

if(!$service){
    header("location: " . ADMIN_URL . 'sever?msg=welcome tồn tại');die;
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
            <h1 class="m-0 text-dark">Welcome Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Welcome Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <main class="container">
        <form id="edit-slider-form" action="<?= ADMIN_URL . 'sever/save-edit.php'?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $service['id'] ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="titlee" value="<?= $service['titlee']?>">
                        <?php if(isset($_GET['titleerr'])):?>
                            <label class="error"><?= $_GET['titleerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Content<span class="text-danger">*</span></label>
                        <textarea name="textx" class="form-control"><?= $service['textx']?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="<?= BASE_URL . $service['image'] ?>" id="preview-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" onchange="encodeImageFileAsURL(this)">
                    </div>

                    <div class="row">
                      <div class="col-md-6 offset-md-3">
                        <img src="<?= BASE_URL . $service['iconn'] ?>" id="preview-icon" class="img-fluid">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="">Icon</label>
                      <input type="file" class="form-control" name="iconn" onchange="encodeIconFileAsURL(this)">
                    </div>

                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'sever'?>" class="btn btn-danger">Hủy</a>
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
            $('#preview-img').attr('src', "<?= BASE_URL . $service['image'] ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
    function encodeIconFileAsURL(element) {
      var file = element.files[0];
      if(file === undefined){
        $('#preview-img').attr('src', "<?= BASE_URL . $service['iconn'] ?>");
        return false;
      }
      var reader = new FileReader();
      reader.onloadend = function() {
        $('#preview-icon').attr('src', reader.result)
      }
      reader.readAsDataURL(file);
    }
    $('#edit-slider-form').validate({
        rules:{
            title: {
                required: true,
                maxlength: 500,
            },
            content: {
              required: true,
            },
            name: {
              required: true,
            },
            image: {
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            title: {
                required: "Hãy nhập title",
                maxlength: "Số lượng ký tự tối đa bằng 500 ký tự",
            },
            content: {
              required: "Hãy nhập content",
            },
            name: {
              required: "Hãy nhập name",
            },
            image: {
                extension: "Hãy nhập đúng định dạng logo (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
</body>
</html>
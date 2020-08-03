<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$getcateQuery = "select * from categories";
$cate = queryExecute($getcateQuery, true);
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
            <h1 class="m-0 text-dark">Room Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Room Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form id="add-user-form" action="<?= ADMIN_URL . 'room/save-add.php'?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tên room<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name">
                        <?php if(isset($_GET['nameerr'])):?>
                        <label class="error"><?= $_GET['nameerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Gia<span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="price">
                        <?php if(isset($_GET['priceerr'])):?>
                            <label class="error"><?= $_GET['priceerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                    	<label for="">Guong<span class="text-danger">*</span></label>
                    	<select name="bedtype" class="form-control">
                    		<option value="1" class="form-control">Đơn</option>
                    		<option value="2" class="form-control">Đôi</option>
                    	</select>
                    </div>
                    <div class="form-group">
                    	<label for="">Room size<span class="text-danger">*</span></label>
                    	<input type="number" class="form-control" name="roomsize">
                    	<?php if(isset($_GET['roomsizeerr'])):?>
                    		<label class="error"><?= $_GET['roomsizeerr']?></label>
                    	<?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Danh muc</label>
                        <select name="cate_id" class="form-control">
                            <?php foreach ($cate as $ca):?>
                            <option value="<?= $ca['id'] ?>"><?= $ca['name'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label for="">Chi tiet<span class="text-danger">*</span></label>
                    	<textarea name="detail" class="form-control"></textarea>
                    	<?php if(isset($_GET['detailerr'])):?>
                    		<label class="error"><?= $_GET['detailerr']?></label>
                    	<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh<span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="image" onchange="encodeImageFileAsURL(this)">
                    </div>
                    <div class="form-group">
                      <label>Trạng thái</label>
                      <br>
                      <select name="status" class="form-control">
                        <option value="1" class="form-control">Active</option>
                        <option value="-1" class="form-control">Inactive</option>
                      </select>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'room'?>" class="btn btn-danger">Hủy</a>
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
    $('#add-user-form').validate({
        rules:{
            name: {
                required: true,
            },
            price: {
                required: true,
            },
            roomsize:{
                required: true,
            },
            detail:{
            	required: true,
            },
            image: {
                required: true,
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            name: {
                required: "Hãy nhập tên room",
            },
            price: {
                required: "Hãy nhập gia",
            },
            roomsize:{
                required: "Hãy nhập room size",
            },
            detail:{
                required: "Hãy nhập chi tiet",
            },
            image: {
                required: "Hãy nhập ảnh room",
                extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
</body>
</html>
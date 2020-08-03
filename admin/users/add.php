<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$getRoleQuery = "select * from roles where status = 1";
$roles = queryExecute($getRoleQuery, true);
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
            <h1 class="m-0 text-dark">User Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form id="add-user-form" action="<?= ADMIN_URL . 'users/save-add.php'?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tên người dùng<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="fullname">
                        <?php if(isset($_GET['nameerr'])):?>
                        <label class="error"><?= $_GET['nameerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email">
                        <?php if(isset($_GET['emailerr'])):?>
                            <label class="error"><?= $_GET['emailerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu<span class="text-danger">*</span></label>
                        <input type="password" id="main-password" class="form-control" name="password">
                        <?php if(isset($_GET['passworderr'])):?>
                            <label class="error"><?= $_GET['passworderr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu<span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="cfpassword">
                    </div>
                    <div class="form-group">
                        <label for="">Quyền</label>
                        <select name="role_id" class="form-control">
                            <?php foreach ($roles as $ro):?>
                            <option value="<?= $ro['id'] ?>"><?= $ro['name'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="<?= DEFAULT_IMAGE ?>" id="preview-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh đại diện<span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="avatar" onchange="encodeImageFileAsURL(this)">
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'users'?>" class="btn btn-danger">Hủy</a>
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
            fullname: {
                required: true,
                maxlength: 191
            },
            email: {
                required: true,
                maxlength: 191,
                email: true,
                remote: {
                    url: "<?= ADMIN_URL . 'users/verify-email-existed.php'?>",
                    type: "post",
                    data: {
                        email: function() {
                            return $( "input[name='email']" ).val();
                        }
                    }
                }
            },
            password:{
                required: true,
                maxlength: 191
            },
            cfpassword: {
                required: true,
                equalTo: "#main-password"
            },
            avatar: {
                required: true,
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            fullname: {
                required: "Hãy nhập tên người dùng",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            email: {
                required: "Hãy nhập email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email",
                remote: "Email đã tồn tại, vui lòng sử dụng email khác"
            },
            password:{
                required: "Hãy nhập mật khẩu",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            cfpassword: {
                required: "Nhập lại mật khẩu",
                equalTo: "Cần khớp với mật khẩu"
            },
            avatar: {
                required: "Hãy nhập ảnh đại diện",
                extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
</body>
</html>
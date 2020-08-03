<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$getCateQuery = "select * from categories";
$cate = queryExecute($getCateQuery, true);

$id = isset($_GET['id']) ? $_GET['id'] : -1;
// kiểm tra tài khoản có tồn tại hay không
$getRoomByIdQuery = "select * from rooms where id = $id";
$room = queryExecute($getRoomByIdQuery, false);
if(!$room){
    header("location: " . ADMIN_URL . 'room?msg=Tài khoản không tồn tại');die;
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
            <h1 class="m-0 text-dark">Room Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Room Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <main class="container">
        <form id="edit-room-form" action="<?= ADMIN_URL . 'room/save-edit.php'?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $room['id'] ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tên room<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" value="<?= $room['name']?>">
                        <?php if(isset($_GET['nameerr'])):?>
                            <label class="error"><?= $_GET['nameerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Gia<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="price" value="<?= $room['price']?>">
                        <?php if(isset($_GET['priceerr'])):?>
                            <label class="error"><?= $_GET['priceerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                      <label for="">Giuong<span class="text-danger">*</span></label>
                      <select name="bedtype" class="form-control">
                        <option <?php if($room['bedtype']== 1) echo "selected" ?> value="1">Đơn</option>
                        <option <?php if($room['bedtype']== 2) echo "selected" ?> value="2">Đôi</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Room Size<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="roomsize" value="<?= $room['roomsize']?>">
                      <?php if(isset($_GET['roomsizeer'])):?>
                        <label class="error"><?= $_GET['roomsizeer']?></label>
                      <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Quyền</label>
                        <select name="cate_id" class="form-control">
                            <?php foreach ($cate as $ca):?>
                                <option value="<?= $ca['id'] ?>"
                                    <?php if($ca['id'] == $room['cate_id']): ?>
                                        selected
                                    <?php endif?>>
                                    <?= $ca['name'] ?>
                                </option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Chi tiet<span class="text-danger">*</span></label>
                      <textarea name="detail" class="form-control"><?= $room['detail']?></textarea>
                      <?php if(isset($_GET['detaileer'])):?>
                        <label class="error"><?= $_GET['detaileer']?></label>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="<?= BASE_URL . $room['image'] ?>" id="preview-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                        <input type="file" class="form-control" name="image" onchange="encodeImageFileAsURL(this)">
                    </div>
                    <div class="form-group">
                      <label>Trạng thái</label>
                      <br>
                      <select name="status" class="form-control">
                        <option <?php if($room['status']== 1) echo "selected" ?> value="1">Active</option>
                        <option <?php if($room['status']== -1) echo "selected" ?> value="-1">Inactive</option>
                      </select>
                    </div>

                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'room'?>" class="btn btn-danger">Hủy</a>
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
            $('#preview-img').attr('src', "<?= BASE_URL . $room['image'] ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
    $('#edit-room-form').validate({
        rules:{
            name: {
                required: true,
            },
            price: {
                required: true,
            },
            roomsize: {
                required: true,
            },
            detail: {
                required: true,
            },
            image: {
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
            roomsize: {
                required: "Hãy nhập room size",
            },
            detail: {
                required: "Hãy nhập Chi tiet",
            },
            image: {
                extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
            }
        }
    });
</script>
</body>
</html>
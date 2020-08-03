<?php 
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$getRoomQuery = "select * from rooms";
$room = queryExecute($getRoomQuery, true);

$getbookingQuery = "select * from bookings";
$booking = queryExecute($getbookingQuery, true);

$id = isset($_GET['id']) ? $_GET['id'] : -1;
// kiểm tra tài khoản có tồn tại hay không
$getBookingByIdQuery = "select * from booking where id = $id";
$booking = queryExecute($getBookingByIdQuery, false);
if(!$booking){
    header("location: " . ADMIN_URL . 'booking?msg=booking không tồn tại');die;
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
            <h1 class="m-0 text-dark">Booking Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Booking Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container">
    <main class="container">
        <form id="edit-booking-form" action="<?= ADMIN_URL . 'booking/save-edit.php'?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $booking['id'] ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ten khach hang<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" value="<?= $booking['name']?>">
                        <?php if(isset($_GET['nameerr'])):?>
                            <label class="error"><?= $_GET['nameerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email" value="<?= $booking['email']?>">
                        <?php if(isset($_GET['priceerr'])):?>
                            <label class="error"><?= $_GET['priceerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Phone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="phone" value="<?= $booking['phone']?>">
                        <?php if(isset($_GET['priceerr'])):?>
                            <label class="error"><?= $_GET['priceerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Room</label>
                        <select name="room_id" class="form-control">
                            <?php foreach ($room as $ro):?>
                                <option value="<?= $ro['id'] ?>"
                                    <?php if($ro['id'] == $booking['room_id']): ?>
                                        selected
                                    <?php endif?>>
                                    <?= $ro['name'] ?>
                                </option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="">Chi tiet<span class="text-danger">*</span></label>
                      <textarea name="note" class="form-control"><?= $booking['note']?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">check in<span class="text-danger">*</span></label>
                    <input name="checkin" type="date" class="form-control" value="<?= $booking['checkin']?>">
                  </div>
                  <div class="form-group">
                    <label for="">check out<span class="text-danger">*</span></label>
                    <input name="checkout" type="date" class="form-control" value="<?= $booking['checkout']?>">
                  </div>
                  <div class="form-group">
                    <label for="">Adult<span class="text-danger">*</span></label>
                    <input name="adult" type="number" class="form-control" value="<?= $booking['adult']?>">
                  </div>
                  <div class="form-group">
                    <label for="">Children<span class="text-danger">*</span></label>
                    <input name="children" type="number" class="form-control" value="<?= $booking['children']?>">
                  </div>
                  <div class="form-group">
                    <label for="">Night<span class="text-danger">*</span></label>
                    <input name="nights" type="number" class="form-control" value="<?= $booking['nights']?>">
                  </div>
                    <div class="form-group">
                      <label>Trạng thái</label>
                      <br>
                      <input type="radio" name="status" value="1"> Active &nbsp;
                      <input type="radio" name="status" value="2"> Inactive
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'booking'?>" class="btn btn-danger">Hủy</a>
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

</script>
</body>
</html>
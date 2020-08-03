<?php 
session_start();

require_once '../../config/utils.php';
checkAdminLoggedIn();

$sql = "select  
              r.*,
              c.name as catename
        from rooms r
        join categories c
          on r.cate_id = c.id
        ";
$products = queryExecute($sql, true);

// dd($products);
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
            <h1 class="m-0 text-dark">Room</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Room</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th scope="col">ID</th>
    			<th scope="col">Ten</th>
    			<th scope="col">Gia</th>
          <th scope="col">Giuong</th>
          <th scope="col">Dien tich</th>
          <th scope="col">Danh muc</th>
    			<th scope="col">Anh</th>
          <th scope="col">Chi Tiet</th>
          <th scope="col">Tinh Trang</th>
    			<th>
    				<a href="<?php echo ADMIN_URL . 'room/add.php'?>" class="btn btn-primary"><i class="fa fa-plpr"></i> Thêm</a>
    			</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($products as $pr): ?>
    		<tr>
    			<td><?php echo $pr['id']?></td>
    			<td><?php echo $pr['name']?></td>
    			<td><?php echo $pr['price']?></td>
          <td><?php echo $pr['bedtype']?></td>
          <td><?php echo $pr['roomsize']?></td>
          <td><?php echo $pr['catename']?></td>
    			<td>
    				<img class="img-fluid" src="<?= BASE_URL . $pr['image']?>" alt="" width="100">
    			</td>
          <td><?php echo $pr['detail']?></td>
          <td><?php echo $pr['status']?></td>
    			<td>
    					<a href="<?php echo ADMIN_URL . 'room/edit.php?id=' . $pr['id'] ?>" class="btn btn-sm btn-info">
    						<i class="fas fa-pencil-alt"></i>
    					</a>
    					<a href="<?php echo ADMIN_URL . 'room/remove.php?id=' . $pr['id'] ?>" class="btn-remove btn btn-sm btn-danger">
    						<i class="fa fa-trash"></i>
    					</a>
    			</td>
    		</tr>
    		<?php endforeach;?>
    	</tbody>
    </table>




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
    $(document).ready(function(){
        $('.btn-remove').on('click', function () {
            var redirectUrl = $(this).attr('href');
            Swal.fire({
                title: 'Thông báo!',
                text: "Bạn có chắc chắn muốn xóa room này?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => { // arrow function es6 (es2015)
                if (result.value) {
                    window.location.href = redirectUrl;
                }
            });
            return false;
        });
        <?php if(isset($_GET['msg'])):?>
        Swal.fire({
            position: 'bottom-end',
            icon: 'warning',
            title: "<?= $_GET['msg'];?>",
            showConfirmButton: false,
            timer: 1500
        });
        <?php endif;?>
    });
</script>
</body>
</html>
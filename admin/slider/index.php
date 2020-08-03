<?php 
session_start();

require_once '../../config/utils.php';
checkAdminLoggedIn();

$getRolesQuery = "select * from roles where status = 1";
$roles = queryExecute($getRolesQuery, true);


$getslidesshowQuery = "select * from slidesshow";


//dd($getUsersQuery);
$slidesshow = queryExecute($getslidesshowQuery, true);
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
            <h1 class="m-0 text-dark">Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th scope="col">ID</th>
    			<th scope="col">Title</th>
          <th scope="col">Sub</th>
    			<th scope="col">Anh</th>
    			<th>
    				<a href="<?php echo ADMIN_URL . 'slider/add.php'?>" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</a>
    			</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($slidesshow as $slider): ?>
    		<tr>
    			<td><?php echo $slider['id']?></td>
    			<td><?php echo $slider['title']?></td>
          <td><?php echo $slider['sub']?></td>
    			<td>
    				<img class="img-fluid" src="<?= BASE_URL . $slider['image']?>" alt="" width="100">
    			</td>
    			<td>
    					<a href="<?php echo ADMIN_URL . 'slider/edit.php?id=' . $slider['id'] ?>" class="btn btn-sm btn-info">
    						<i class="fas fa-pencil-alt"></i>
    					</a>
    					<a href="<?php echo ADMIN_URL . 'slider/remove.php?id=' . $slider['id'] ?>" class="btn-remove btn btn-sm btn-danger">
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

</body>
</html>
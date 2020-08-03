<?php 
session_start();

require_once '../../config/utils.php';
checkAdminLoggedIn();

$getserviceuery = "select * from hotel_service";


//dd($getUsersQuery);
$service = queryExecute($getserviceuery, true);
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
            <h1 class="m-0 text-dark">Sever</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sever</li>
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
          <th scope="col">Content</th>
    			<th scope="col">Icon</th>
          <th scope="col">Image</th>
          <th scope="col"></th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($service as $se): ?>
    		<tr>
    			<td><?php echo $se['id']?></td>
    			<td><?php echo $se['titlee']?></td>
          <td><?php echo $se['textx']?>
            </td>
            <td>
              <img class="img-fluid" src="<?= BASE_URL . $se['image']?>" alt="" width="100">
            </td>
    			<td>
    				<img class="img-fluid" src="<?= BASE_URL . $se['iconn']?>" alt="" width="100">
    			</td>
    			<td>
    					<a href="<?php echo ADMIN_URL . 'sever/edit.php?id=' . $se['id'] ?>" class="btn btn-sm btn-info">
    						<i class="fas fa-pencil-alt"></i>
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
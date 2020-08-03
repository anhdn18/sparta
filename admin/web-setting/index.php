<?php 
session_start();

require_once '../../config/utils.php';
checkAdminLoggedIn();

$getSettingQuery = "select * from web_settings";



//dd($getUsersQuery);
$Setting = queryExecute($getSettingQuery);

// var_dump($Setting);
// die;
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
            <h1 class="m-0 text-dark">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th scope="col">ID</th>
    			<th scope="col">Email</th>
          <th scope="col">Address</th>
    			<th scope="col">Hotline</th>
          <th scope="col">Map</th>
          <th scope="col">logo</th>
          <th scope="col"></th>
    		</tr>
    	</thead>
    	<tbody>
    		
    		<tr>
    			<td><?= $Setting['id']?></td>
    			<td><?= $Setting['email']?></td>
          <td><?= $Setting['address']?></td>
          <td><?= $Setting['hotline']?></td>
          <td><?= $Setting['map']?></td>
    			<td>
    				<img class="img-fluid" src="<?= BASE_URL . $Setting['logo']?>" alt="" width="100">
    			</td>
    			<td>
    					<a href="<?php echo ADMIN_URL . 'web-setting/edit.php?id=' . $Setting['id'] ?>" class="btn btn-sm btn-info">
    						<i class="fas fa-pencil-alt"></i>
    					</a>
    			</td>
    		</tr>
    		
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
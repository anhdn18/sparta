<?php 
session_start();

require_once '../../config/utils.php';
checkAdminLoggedIn();

$getWelcomeQuery = "select * from welcomes";


//dd($getUsersQuery);
$Welcome = queryExecute($getWelcomeQuery);
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
            <h1 class="m-0 text-dark">Welcome</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Welcome</li>
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
    			<th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col"></th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			<td><?php echo $Welcome['id']?></td>
    			<td><?php echo $Welcome['title']?></td>
          <td><?php echo $Welcome['content']?>
            </td>
          <td><?php echo $Welcome['name']?></td>
    			<td>
    				<img class="img-fluid" src="<?= BASE_URL . $Welcome['image']?>" alt="" width="100">
    			</td>
    			<td>
    					<a href="<?php echo ADMIN_URL . 'welcome/edit.php?id=' . $Welcome['id'] ?>" class="btn btn-sm btn-info">
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
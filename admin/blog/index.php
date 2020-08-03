<?php 
session_start();

require_once '../../config/utils.php';
checkAdminLoggedIn();

$getRolesQuery = "select * from roles where status = 1";
$roles = queryExecute($getRolesQuery, true);


$getBlogQuery = "select * from blogs";


//dd($getUsersQuery);
$blog = queryExecute($getBlogQuery, true);
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
            <h1 class="m-0 text-dark">Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th scope="col">ID</th>
    			<th scope="col">Tieu De</th>
          <th scope="col">Noi Dung</th>
    			<th scope="col">Anh</th>
    			<th>
    				<a href="<?php echo ADMIN_URL . 'blog/add.php'?>" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</a>
    			</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($blog as $bl): ?>
    		<tr>
    			<td><?php echo $bl['id']?></td>
    			<td><?php echo $bl['title']?></td>
          <td><?php echo $bl['content']?></td>
    			<td>
    				<img class="img-fluid" src="<?= BASE_URL . $bl['image']?>" alt="" width="100">
    			</td>
    			<td>
    					<a href="<?php echo ADMIN_URL . 'blog/edit.php?id=' . $bl['id'] ?>" class="btn btn-sm btn-info">
    						<i class="fas fa-pencil-alt"></i>
    					</a>
    					<a href="<?php echo ADMIN_URL . 'blog/remove.php?id=' . $bl['id'] ?>" class="btn-remove btn btn-sm btn-danger">
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
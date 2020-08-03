<?php 
session_start();

require_once '../../config/utils.php';
checkAdminLoggedIn();

$getContactQuery = "select * from contact";
//dd($getUsersQuery);
$con = queryExecute($getContactQuery, true);
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
          <th scope="col">Ten</th>
          <th scope="col">Email</th>
          <th scope="col">SDT</th>
          <th scope="col">Noi dung</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($con as $co): ?>
          <tr>
            <td><?php echo $co['id']?></td>
            <td><?php echo $co['name']?></td>
            <td><?php echo $co['email']?></td>
            <td><?php echo $co['phone']?></td>
            <td><?php echo $co['comment']?></td>
            <td>
              <a href="<?php echo ADMIN_URL . 'coog/remove.php?id=' . $co['id'] ?>" class="btn-remove btn btn-sm btn-danger">
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
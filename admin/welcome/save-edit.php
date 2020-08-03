<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$name = trim($_POST['name']);
$image = $_FILES['image'];

// kiểm tra tài khoản có tồn tại hay không
$getWelcomeByIdQuery = "select * from welcomes where id = $id";
$welcome = queryExecute($getWelcomeByIdQuery, false);

// if(!$setting){
//     header("location: " . ADMIN_URL . 'web-setting?msg=setting không tồn tại');die;
// }


$titleerr = "";


// check email
if(strlen($title) == 0){
    $titleerr = "Yêu cầu nhập title!";
}


if($titleerr != "" ){
    header('location: ' . ADMIN_URL . "welcome/edit-form.php?id=$id&titleerr=$titleerr");
    die;
}

// upload file
$filename = $welcome['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}

$updateWelcomeQuery = "update welcomes 
                    set
                          title = '$title', 
                          content = '$content', 
                          name = '$name', 
                          image = '$filename'
                    where id = $id";
// dd($updateWelcomeQuery);

queryExecute($updateWelcomeQuery, false);
header("location: " . ADMIN_URL . "welcome");
die;
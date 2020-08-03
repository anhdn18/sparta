<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$descs = trim($_POST['descs']);

// kiểm tra tài khoản có tồn tại hay không
$getCategoryByIdQuery = "select * from categories where id = $id";
$user = queryExecute($getCategoryByIdQuery, false);

if(!$user){
    header("location: " . ADMIN_URL . 'category?msg=Danh muc không tồn tại');die;
}

// validate bằng php
$titleerr = "";

// check email
if(strlen($name) == 0){
    $titleerr = "Yêu cầu nhập danh muc!";
}

// check email đã tồn tại hay chưa
$checkEmailQuery = "select * from categories where name = '$name' and id != $id";
$users = queryExecute($checkEmailQuery, true);
if($titleerr == "" && count($users) > 0){
    $titleerr = "danh muc đã tồn tại, vui lòng sử dụng email khác";
}

if($titleerr != "" ){
    header('location: ' . ADMIN_URL . "category/edit.php?id=$id&titleerr=$titleerr");
    die;
}


$updateCategoryQuery = "update categories 
                    set
                          name = '$name', 
                          descs = '$descs'
                    where id = $id";

queryExecute($updateCategoryQuery, false);
header("location: " . ADMIN_URL . "category");
die;
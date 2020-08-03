<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$descs= trim($_POST['descs']);

// validate bằng php
$titleerr = "";


// check email
if(strlen($name) == 0){
    $titleerr = "Yêu cầu nhập ten danh muc!";
}
// check email đã tồn tại hay chưa
$checkEmailQuery = "select * from categories where name = '$name'";
$users = queryExecute($checkEmailQuery, true);
if($titleerr == "" && count($users) > 0){
    $titleerr = "ten danh muc đã tồn tại, vui lòng sử dụng danh muc khác";
}


if($titleerr != "" ){
    header('location: ' . ADMIN_URL . "category/add.php?titleerr=$titleerr");
    die;
}


$insertCategoryQuery = "insert into categories 
                          (name, descs)
                    values 
                          ('$name', '$descs')";
queryExecute($insertCategoryQuery, false);
header("location: " . ADMIN_URL . "category");
die;
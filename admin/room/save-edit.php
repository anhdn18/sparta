<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$price = trim($_POST['price']);
$bedtype = trim($_POST['bedtype']);
$roomsize = trim($_POST['roomsize']);
$cate_id = trim($_POST['cate_id']);
$detail = trim($_POST['detail']);
$status = trim($_POST['status']);
$image = $_FILES['image'];

// kiểm tra tài khoản có tồn tại hay không
$getRoomByIdQuery = "select * from rooms where id = $id";
$room = queryExecute($getRoomByIdQuery, false);

if(!$room){
    header("location: " . ADMIN_URL . 'room?msg=Tài khoản không tồn tại');die;
}


// validate bằng php
$nameerr = "";
$priceerr = "";
$roomsizeerr = "";
$detailerr = "";

// check email
if(strlen($name) == 0){
    $nameerr = "Yêu cầu nhập ten room!";
}

// check email đã tồn tại hay chưa
$checkNameQuery = "select * from rooms where name = '$name' and id != $id";
$name = queryExecute($checkNameQuery, true);
if($nameerr == "" && count($name) > 0){
    $nameerr = "Ten room đã tồn tại, vui lòng sử dụng ten room khác";
}
if(strlen($price) == 0){
    $priceerr = "Yêu cầu nhập gia!";
}
if(strlen($roomsize) == 0){
    $roomsizeerr = "Yêu cầu nhập room size!";
}
if(strlen($detail) == 0){
    $detailerr = "Yêu cầu nhập ten chi tiet!";
}

if($nameerr . $priceerr . $roomsizeerr .$detailerr!= "" ){
    header('location: ' . ADMIN_URL . "room/edit.php?id=$id&nameerr=$nameerr&priceerr=$priceerr&roomsizeerr=$roomsizeerr&detailerr=$detailerr");
    die;
}

// upload file
$filename = $room['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}

$updateUserQuery = "update rooms 
                    set
                          name = '$name', 
                          price = '$price', 
                          cate_id = '$cate_id', 
                          bedtype = '$bedtype', 
                          roomsize = '$roomsize', 
                          bedtype = '$bedtype', 
                          detail = '$detail', 
                          image = '$filename',
                          status = '$status'
                    where id = $id";
queryExecute($updateUserQuery, false);
header("location: " . ADMIN_URL . "room");
die;
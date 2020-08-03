<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$price = trim($_POST['price']);
$bedtype = trim($_POST['bedtype']);
$roomsize = trim($_POST['roomsize']);
$detail = trim($_POST['detail']);
$cate_id = trim($_POST['cate_id']);
$status = trim($_POST['status']);
$image = $_FILES['image'];
// validate bằng php
$nameerr = "";
$priceerr = "";
$roomsizeerr = "";
$detailerr = "";


// check email
if(strlen($name) == 0){
    $nameerr = "Yêu cầu nhập email!";
}

// check email đã tồn tại hay chưa
$checkNameQuery = "select * from rooms where name = '$name'";
$namee = queryExecute($checkNameQuery, true);
if($nameerr == "" && count($namee) > 0){
    $nameerr = "Ten đã tồn tại, vui lòng sử dụng ten khác";
}
// check password
if(strlen($price) == 0){
    $priceerr = "Yêu cầu nhập gia!";
}
if(strlen($roomsize) == 0){
    $roomsizeerr = "Yêu cầu nhập room size!";
}
if(strlen($detail) == 0){
    $detailerr = "Yêu cầu nhập chi tiet!";
}


if($nameerr . $priceerr . $roomsizeerr . $detailerr!= "" ){
    header('location: ' . ADMIN_URL . "room/add.php?nameerr=$nameerr&priceerr=$priceerr&roomsizeerr=$roomsizeerr$detailerr=$detailerr");
    die;
}

// upload file ảnh
$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}
$insertRoomQuery = "insert into rooms 
                          (name, price, bedtype, roomsize,cate_id,detail,status, image)
                    values 
                          ('$name', '$price', '$bedtype', '$roomsize','$cate_id','$detail','$status', '$filename')";
                          // dd($insertRoomQuery);
queryExecute($insertRoomQuery, false);
header("location: " . ADMIN_URL . "room");
die;
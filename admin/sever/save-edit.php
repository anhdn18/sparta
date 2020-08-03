<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$titlee = trim($_POST['titlee']);
$textx = trim($_POST['textx']);

$image = $_FILES['image'];
$iconn = $_FILES['iconn'];

// kiểm tra tài khoản có tồn tại hay không
$getserviceByIdQuery = "select * from hotel_service where id = $id";
$service = queryExecute($getserviceByIdQuery, false);

// if(!$setting){
//     header("location: " . ADMIN_URL . 'web-setting?msg=setting không tồn tại');die;
// }


$titleerr = "";


// check email
if(strlen($titlee) == 0){
    $titleerr = "Yêu cầu nhập title!";
}


// if($titleerr != "" ){
//     header('location: ' . ADMIN_URL . "sever/edit-form.php?id=$id&titleerr=$titleerr");
//     die;
// }

// upload file image
$filename = $service['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}
$filenamee = $service['iconn'];
if($iconn['size'] > 0){
    $filenamee = uniqid() . '-' . $iconn['name'];
    move_uploaded_file($iconn['tmp_name'], "../../plugin/images/" . $filenamee);
    $filenamee = "plugin/images/" . $filenamee;
}

$updateseverQuery = "update hotel_service 
                    set
                          titlee = '$titlee', 
                          textx = '$textx', 
                          image = '$filename',
                          iconn = '$filenamee'
                    where id = $id";
// dd($updateseverQuery);

queryExecute($updateseverQuery, false);
header("location: " . ADMIN_URL . "sever");
die;
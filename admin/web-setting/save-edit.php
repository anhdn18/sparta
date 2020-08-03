<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$email = trim($_POST['email']);
$address = trim($_POST['address']);
$hotline = trim($_POST['hotline']);
$map = trim($_POST['map']);
$logo = $_FILES['logo'];

// kiểm tra tài khoản có tồn tại hay không
$getSettingByIdQuery = "select * from web_settings where id = $id";
$setting = queryExecute($getSettingByIdQuery, false);

// if(!$setting){
//     header("location: " . ADMIN_URL . 'web-setting?msg=setting không tồn tại');die;
// }


$emailerr = "";


// check email
if(strlen($email) == 0){
    $emailerr = "Yêu cầu nhập email!";
}
if ($emailerr == "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerr = "Không đúng định dạng email";
}



if($emailerr != "" ){
    header('location: ' . ADMIN_URL . "web-setting/edit-form.php?id=$id&emailerr=$emailerr");
    die;
}

// upload file
$filename = $setting['logo'];
if($logo['size'] > 0){
    $filename = uniqid() . '-' . $logo['name'];
    move_uploaded_file($logo['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}

$updateSettingQuery = "update web_settings 
                    set
                          email = '$email', 
                          address = '$address', 
                          hotline = '$hotline', 
                          map = '$map', 
                          logo = '$filename'
                    where id = $id";
// dd($updateSettingQuery);

queryExecute($updateSettingQuery, false);
header("location: " . ADMIN_URL . "web-setting");
die;
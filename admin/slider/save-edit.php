<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$title = trim($_POST['title']);
$sub = trim($_POST['sub']);
$image = $_FILES['image'];

// kiểm tra tài khoản có tồn tại hay không
$getSliderByIdQuery = "select * from slidesshow where id = $id";
$slider = queryExecute($getSliderByIdQuery, false);

$titleer = "";
$subeer = "";

//check name
// if(strlen($title) < 2 || strlen($title) > 191){
//     $titleer = "Yêu cầu nhập title nằm trong khoảng 2-191 ký tự";
// }

// if(strlen($sub) < 2 || strlen($sub) > 191){
//     $subeer = "Yêu cầu nhập sub nằm trong khoảng 2-100 ký tự";
// }


// // check email đã tồn tại hay chưa
// $checkTitleQuery = "select * from slidesshow where title = '$title' and id != $id";
// $slider = queryExecute($checkTitleQuery, true);
// if($nameerr == "" && count($slider) > 0){
//     $nameerr = "title đã tồn tại, vui lòng sử dụng title khác";
// }


// if($titleerr . $subeer != "" ){
//     header('location: ' . ADMIN_URL . "slider/edit-form.php?id=$id&nameerr=$nameerr&emailerr=$emailerr");
//     die;
// }

// upload file
$filename = $slider['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}

$updateSlideQuery = "update slidesshow 
                    set
                          title = '$title', 
                          sub = '$sub', 
                          image = '$filename'
                    where id = $id";
                    // dd($updateSlideQuery);
queryExecute($updateSlideQuery, false);
header("location: " . ADMIN_URL . "slider");
die;
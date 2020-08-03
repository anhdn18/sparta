<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$title = trim($_POST['title']);
$sub = trim($_POST['sub']);
$image = $_FILES['image'];
// validate bằng php
$titleerr = "";

// check name
if(strlen($title) < 2 || strlen($title) > 191){
    $titleerr = "Yêu cầu nhập title nằm trong khoảng 2-191 ký tự";
}
if(strlen($sub) < 2 || strlen($sub) > 191){
    $suberr = "Yêu cầu nhập sub nằm trong khoảng 2-191 ký tự";
}


if($titleerr != "" ){
    header('location: ' . ADMIN_URL . "slider/add.php?titleerr=$titleerr");
    die;
}

// upload file ảnh
$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}
$insertSliderQuery = "insert into slidesshow 
                          (title, image,sub)
                    values 
                          ('$title', '$filename','$sub')";
queryExecute($insertSliderQuery, false);
header("location: " . ADMIN_URL . "slider");
die;
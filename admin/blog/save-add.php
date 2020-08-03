<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$image = $_FILES['image'];
// validate bằng php
$titleerr = "";

// check name
if(strlen($title) < 2 || strlen($title) > 500){
    $titleerr = "Yêu cầu nhập title nằm trong khoảng 2-500 ký tự";
}



if($titleerr != "" ){
    header('location: ' . ADMIN_URL . "blog/add.php?titleerr=$titleerr");
    die;
}

// upload file ảnh
$filename = "";
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}
$insertBlogQuery = "insert into blogs 
                          (title, image,content)
                    values 
                          ('$title', '$filename','$content')";
queryExecute($insertBlogQuery, false);
header("location: " . ADMIN_URL . "blog");
die;
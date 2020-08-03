<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$title = trim($_POST['title']);
$content = trim($_POST['content']);
$image = $_FILES['image'];

// kiểm tra tài khoản có tồn tại hay không
$getBlogByIdQuery = "select * from blogs where id = $id";
$blog = queryExecute($getBlogByIdQuery, false);

// $titleerr = "";

// //check name
// if(strlen($title) < 2 || strlen($title) > 500){
//     $titleerr = "Yêu cầu nhập title nằm trong khoảng 2-500 ký tự";
// }




// // check email đã tồn tại hay chưa
// $checkTitleQuery = "select * from blogs where title = '$title' and id != $id";
// $blog = queryExecute($checkTitleQuery, true);
// if($titleerr == "" && count($blog) > 0){
//     $titleerr = "title đã tồn tại, vui lòng sử dụng title khác";
// }


// if($titleerr != "" ){
//     header('location: ' . ADMIN_URL . "blog/edit-form.php?id=$id&titleerr=$titleerr");
//     die;
// }

// upload file
$filename = $blog['image'];
if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../../plugin/images/" . $filename);
    $filename = "plugin/images/" . $filename;
}

$updateBlogQuery = "update blogs 
                    set
                          title = '$title', 
                          content = '$content', 
                          image = '$filename'
                    where id = $id";
queryExecute($updateBlogQuery, false);
header("location: " . ADMIN_URL . "blog");
die;
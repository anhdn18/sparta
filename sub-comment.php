<?php
session_start();
include_once "./config/utils.php";
$roomId = $_POST['roomId'];

// dd($roomId);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$content = trim($_POST['content']);

// validate bằng php
$nameerr = "";
$emailerr = "";
// check name
if(strlen($name) < 2 || strlen($name) > 191){
    $nameerr = "Yêu cầu nhập tên ban nằm trong khoảng 2-191 ký tự";
}

// check email
if(strlen($email) == 0){
    $emailerr = "Yêu cầu nhập email!";
}
if ($emailerr == "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerr = "Không đúng định dạng email";
}



if($nameerr . $emailerr != "" ){
    header('location: ' . BASE_URL . "room-details.php?nameerr=$nameerr&emailerr=$emailerr");
    die;
}

$insertCommentQuery = "insert into comment 
                          (name, email, content, room_id)
                    values 
                          ('$name', '$email', '$content', '$roomId')";
                          // dd($insertCommentQuery);
queryExecute($insertCommentQuery, false);
header("location: " . BASE_URL . "room-details.php?id=" . $roomId);
die;
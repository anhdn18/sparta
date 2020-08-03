<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$comment = trim($_POST['comment']);
// validate bằng php
$nameerr = "";
$emailerr = "";
$phoneerr = "";
$commenterr = "";
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
// if(strlen($phone) = 10){
//     $phoneerr = "Yêu cầu nhập SDT du 10 so";
// }
if(strlen($phone) == 0){
    $phoneerr = "Yêu cầu nhập phone!";
}
if(strlen($comment) == 0){
    $commenterr = "Yêu cầu nhập noi dung!";
}


if($nameerr . $emailerr . $phoneerr . $commenterr != "" ){
    header('location: ' . BASE_URL . "contact.php?nameerr=$nameerr&emailerr=$emailerr&phoneerr=$phoneerr&commenterr=$commenterr");
    die;
}

$insertContactQuery = "insert into contact 
                          (name, email, phone, comment)
                    values 
                          ('$name', '$email', '$phone', '$comment')";
                          // dd($insertUserQuery);
queryExecute($insertContactQuery, false);
header("location: " . BASE_URL . "contact.php");
die;
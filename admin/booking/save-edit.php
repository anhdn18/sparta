<?php 
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$room_id = trim($_POST['room_id']);
$note = trim($_POST['note']);
$checkin = trim($_POST['checkin']);
$checkout = trim($_POST['checkout']);
$adult = trim($_POST['adult']);
$children = trim($_POST['children']);
$nights = trim($_POST['nights']);
$status = trim($_POST['status']);

$getBookingByIdQuery = "select * from booking where id = $id";
$booking = queryExecute($getBookingByIdQuery, false);

if(!$booking){
    header("location: " . ADMIN_URL . 'booking?msg=Tài khoản không tồn tại');die;
}


$updateBookingQuery = "update booking 
                    set
                          name = '$name', 
                          email = '$email', 
                          phone = '$phone', 
                          room_id = '$room_id', 
                          note = '$note', 
                          checkin = '$checkin', 
                          checkout = '$checkout', 
                          adult = '$adult',
                          children = '$children',nights = '$nights',status = '$status'
                    where id = $id";
queryExecute($updateBookingQuery, false);
header("location: " . ADMIN_URL . "booking");
die;
 ?>
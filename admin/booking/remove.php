<?php

session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemoveBookingQuery = "select * from booking where id = $id";
$removeBooking = queryExecute($getRemoveBookingQuery, false);
if(!$removeBooking){
    header("location: " . ADMIN_URL . "booking?msg=Booking không tồn tại");
    die;
}


$removeBookingQuery = "delete from booking where id = $id";
queryExecute($removeBookingQuery, false);
header("location: " . ADMIN_URL . "booking?msg=Xóa Booking thành công");
die;
<?php

session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemoveRoomQuery = "select * from rooms where id = $id";
$removeRoom = queryExecute($getRemoveRoomQuery, false);
if(!$removeRoom){
    header("location: " . ADMIN_URL . "room?msg=Room không tồn tại");
    die;
}


$removeRoomQuery = "delete from rooms where id = $id";
queryExecute($removeRoomQuery, false);
header("location: " . ADMIN_URL . "room?msg=Xóa room thành công");
die;
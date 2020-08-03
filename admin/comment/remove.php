<?php

session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemoveCommentQuery = "select * from comment where id = $id";
$removeComment = queryExecute($getRemoveCommentQuery, false);
if(!$removeComment){
    header("location: " . ADMIN_URL . "comment?msg=Comment không tồn tại");
    die;
}


$removeCommentQuery = "delete from comment where id = $id";
queryExecute($removeCommentQuery, false);
header("location: " . ADMIN_URL . "comment?msg=Xóa comment thành công");
die;
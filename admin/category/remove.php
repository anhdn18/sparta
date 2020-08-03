<?php
/**
 * Created by PhpStorm.
 * User: ginv2
 * Date: 2/17/20
 * Time: 18:41
 * 1. lấy id xuống
 * 2. kiểm tra xem có quyền để xóa tài khoản với id đc nhận hay không
 * 4. thực hiện câu lệnh xóa với csdl
 * 5. điều hướng về danh sách
 *
 */
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getCategoryQuery = "select * from categories where id = $id";
$removeCategory = queryExecute($getCategoryQuery, false);



$removeCategoryQuery = "delete from categories where id = $id";
queryExecute($removeCategoryQuery, false);
header("location: " . ADMIN_URL . "category?msg=Xóa danh muc thành công");
die;
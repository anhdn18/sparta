<?php 
session_start();
require_once 'config/utils.php';
$roomId = $_POST['roomId'];

$checkin = trim($_POST['checkin']);
$checkout = trim($_POST['checkout']);
$nights = trim($_POST['nights']);
$adult = trim($_POST['adult']);
$children = trim($_POST['children']);
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$note = trim($_POST['note']);


$insertbookingQuery = "insert into booking 
                          (checkin, checkout, nights, room_id, adult, children, name, phone, email, note)
                    values 
                          ('$checkin', '$checkout', '$nights', '$roomId', '$adult', '$children', '$name', '$phone', '$email', '$note')";
                          // dd($insertCommentQuery);
queryExecute($insertbookingQuery, false);
header("location: comfirmation.php?id=" . $roomId);


 ?>
<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
// //MySQL相關資訊

require_once ("conn.php");
// -------------------------------------------

$message = $_POST['message'];
$order_id = $_POST['order_id'];
$member_id = $_POST['member_id'];
$consultant_id = $_POST['consultant_id'];
$message_sender = $_POST['message_sender'];

$sql = "INSERT INTO message (message, message_time, 
order_id, member_id, consultant_id,message_sender) VALUES
(?, NOW(),?, ?, ?, ? )";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$message);
$statement->bindValue(2,$order_id);
$statement->bindValue(3,$member_id);
$statement->bindValue(4,$consultant_id);
$statement->bindValue(5,$message_sender);
$statement->execute();

echo '訊息發送成功';

?>
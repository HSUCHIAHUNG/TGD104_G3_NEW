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

$order_id = $_POST['order_id'];

$sql = "select m.m_photo, c.c_photo1,
mes.id, mes.message, mes.message_time, mes.order_id, mes.member_id,
mes.consultant_id,mes.message_sender
from ((message mes 
join member m on m.id = mes.member_id)
join consultant c on c.id = mes.consultant_id)
where order_id = ? 
order by mes.message_time desc";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$order_id);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);

?>
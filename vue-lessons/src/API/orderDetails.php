<?php
  // 建立一個 Express application 物件
  // 跨網域設定
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫----------------------------------------
// //MySQL相關資訊
// //建立資料庫連線物件

require_once ("conn.php");
// -------------------------------------

$order_id = $_POST['order_id'];


$sql = "select c.id, c.c_firstname, c.c_lastname, c.c_idphoto,
a.s_title, a.s_category, a.s_class, a.s_cost,a.about_cid,
o.id, o.so_order_date, o.so_booking_date
from ( (about_consultant a
Join consultant c on a.about_cid = c.id)
Join `order` o on a.about_cid = o.consultant_id) where o.id = ?";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$order_id);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);

?>
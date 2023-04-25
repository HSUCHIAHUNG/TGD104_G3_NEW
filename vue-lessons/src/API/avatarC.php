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

$consultant_id = $_POST['Consultant_id'];


$sql = "select 
c_firstname,
c_lastname
from consultant where id = $consultant_id";


$statement = $pdo->prepare($sql);
// $statement->bindValue(1,$consultant_id);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);

?>
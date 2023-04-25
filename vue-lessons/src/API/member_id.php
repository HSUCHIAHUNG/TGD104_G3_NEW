<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
//MySQL相關資訊
require_once ("conn.php");
// -------------------------------------------

// 取得表單資料

$m_id = htmlspecialchars($_POST['member_id']);

// select 資料
$sql = "SELECT id FROM member WHERE m_id = ?";

$statement = $pdo->prepare($sql);
$statement->bindValue(1,$m_id);
$statement->execute();

$data = $statement->fetchAll();

if (count($data) > 0) {
  foreach ($data as $index => $row) {
    echo $row["id"];   //欄位名稱
  }
} else {
  echo "No matching records found.";
}

// echo $m_firstname.$m_lastname.$m_mail.$m_birth.$m_password;

?>
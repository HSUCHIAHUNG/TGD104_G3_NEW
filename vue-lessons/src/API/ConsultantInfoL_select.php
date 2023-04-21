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

// 取得cookies 資料
$about_cid = $_POST['about_cid'];

$sql = "SELECT * FROM about_consultant WHERE about_cid = ?";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$about_cid);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);



?>
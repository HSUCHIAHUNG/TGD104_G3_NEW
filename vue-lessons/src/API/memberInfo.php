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
$id = $_POST['id'];

$sql = "SELECT * FROM member WHERE id = ?";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$id);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);

// if(count($data)>0){
   
// } else {
  
// }

// echo $m_firstname.$m_lastname.$m_mail.$m_birth.$m_password;

?>
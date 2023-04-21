<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
<<<<<<< HEAD
require_once ("conn.php");
=======
//MySQL相關資訊
require_once ("conn.php");

>>>>>>> bc258ca1bfbf85c49d957778aeeada829d65a752
// -------------------------------------------

// 取得表單資料
$m_mail = htmlspecialchars($_POST['m_mail']);
$m_password = htmlspecialchars($_POST['m_password']);
 

$sql = "SELECT * FROM member WHERE m_mail = ? and m_password = ?";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$m_mail);
$statement->bindValue(2,$m_password);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);


?>
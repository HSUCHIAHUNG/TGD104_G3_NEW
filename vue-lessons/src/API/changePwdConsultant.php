<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
require_once ("conn.php");
// -------------------------------------------

// 取得表單資料
$id = htmlspecialchars($_POST['id']);
$c_password = htmlspecialchars($_POST['c_password']);
$new_pwd = htmlspecialchars($_POST['new_pwd']);
 
$sql = "SELECT c_password FROM consultant WHERE id = ? and c_password = ?";

$statement = $pdo->prepare($sql);
$statement->bindValue(1,$id);
$statement->bindValue(2,$c_password);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();

if (count($data) > 0) {
  $sql = "UPDATE consultant SET c_password = ? WHERE id = ?";
  $statement = $pdo->prepare($sql);
  $statement->bindValue(1, $new_pwd);
  $statement->bindValue(2, $id);
  $statement->execute();
  echo '變更成功';
} else {
  echo '密碼不正確，請重新確認';
}


?>
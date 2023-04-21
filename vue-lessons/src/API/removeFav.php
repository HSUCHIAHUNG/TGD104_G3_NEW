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

// 取得 POST 資料
$id = $_POST['id'];
$m_collect = json_encode($_POST['m_collect']); 
// 傳入時要先包裝成json檔的格式才能再放回資料庫

$sql = "UPDATE member SET m_collect = :m_collect WHERE id = :id";
$statement = $pdo->prepare($sql);
$statement->bindParam(':m_collect', $m_collect);
$statement->bindParam(':id', $id);
$statement->execute();


echo '移除成功';
?>

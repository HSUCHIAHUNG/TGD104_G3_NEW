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

$member_id = $_POST['member_id'];

$sql = "select m_photo from member where id = ?";
$statement = $pdo->prepare($sql);
$statement->bindValue(1,$member_id);
$statement->execute();
$data = $statement->fetchAll();
echo json_encode($data);

?>

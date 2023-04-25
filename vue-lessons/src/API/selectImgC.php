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

$sql = "select c_photo1 from consultant where id = 1";
$statement = $pdo->prepare($sql);
$statement->execute();
$data = $statement->fetchAll();
echo json_encode($data);


?>

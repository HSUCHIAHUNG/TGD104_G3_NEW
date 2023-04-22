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

$order_id = $_POST['order_id'];
$star = $_POST['star'];
$comment_title = $_POST['comment_title'];
$comment_content = $_POST['comment_content'];

$sql = "UPDATE `order` SET 
        or_star = ?,
        or_comment_title = ?,
        or_comment = ?,
        or_comment_date = NOW()
        WHERE id = '$order_id'";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$star);
$statement->bindValue(2,$comment_title);
$statement->bindValue(3,$comment_content);
$statement->execute();

echo '評論成功'

?>
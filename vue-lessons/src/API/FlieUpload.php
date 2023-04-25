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
$m_photo = $_POST['m_photo'];

$sql = "UPDATE member SET m_photo = ? WHERE id = ?";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(1,$m_photo);
        $statement->bindValue(2,$member_id);
        $statement->execute();
        
    

    // 取得檔案副檔名
    // function getExtensionName($filePath){
    //     $path_parts = pathinfo($filePath);
    //     return $path_parts["extension"];
    // }
?>

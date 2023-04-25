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

$consultant_id = $_POST['Consultant_id'];
$c_photo1 = $_POST['C_photo1'];

$sql = "UPDATE consultant
        SET c_photo1 = '$c_photo1'
        WHERE id = '$consultant_id';";

        $statement = $pdo->prepare($sql);
        // $statement->bindValue(1,$c_photo1);
        // $statement->bindValue(2,$consultant_id);
        $statement->execute();
        
    

    // 取得檔案副檔名
    // function getExtensionName($filePath){
    //     $path_parts = pathinfo($filePath);
    //     return $path_parts["extension"];
    // }
?>
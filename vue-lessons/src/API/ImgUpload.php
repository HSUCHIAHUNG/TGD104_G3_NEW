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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
      $file = $_FILES['file'];
      $targetDir = 'uploads/';
      $targetFile = $targetDir . basename($file['name']);
      if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        echo 'The file ' . basename($file['name']) . ' has been uploaded.';
      } else {
        echo 'There was an error uploading the file.';
      }
    } else {
      echo 'No file was uploaded.';
    }
  }
  
  
  
  
?>

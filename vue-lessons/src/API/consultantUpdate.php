<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


//MySQL相關資訊
require_once ("conn.php");
// -------------------------------------------

// 取得cookies 資料
$id = $_POST['id'];
$c_firstname = $_POST['c_firstname'];
$c_lastname = $_POST['c_lastname'];
$c_mail = $_POST['c_mail'];
$c_nickname = $_POST['c_nickname'];
$c_id = $_POST['c_id'];
$c_phone = $_POST['c_phone'];
$c_area = $_POST['c_area'];
$c_gender = $_POST['c_gender'];
$c_birth = $_POST['c_birth'];

$sql = "UPDATE consultant SET 
        c_firstname = '$c_firstname', 
        c_lastname = '$c_lastname', 
        c_mail = '$c_mail', 
        c_nickname = '$c_nickname', 
        c_id = '$c_id', 
        c_phone = '$c_phone', 
        c_area = '$c_area', 
        c_gender = '$c_gender', 
        c_birth = '$c_birth' 
        WHERE id = '$id'";


$pdo->exec($sql);
       
echo "更新成功";


?>
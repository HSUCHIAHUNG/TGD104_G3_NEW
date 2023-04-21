<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
require_once ("conn.php");
//MySQL相關資訊
require_once ("conn.php");
// -------------------------------------------

// 取得cookies 資料
$id = $_POST['id'];
$m_firstname = $_POST['m_firstname'];
$m_lastname = $_POST['m_lastname'];
$m_mail = $_POST['m_mail'];
$m_nickname = $_POST['m_nickname'];
$m_id = $_POST['m_id'];
$m_phone = $_POST['m_phone'];
$m_area = $_POST['m_area'];
$m_gender = $_POST['m_gender'];
$m_birth = $_POST['m_birth'];

$sql = "UPDATE member SET 
        m_firstname = '$m_firstname', 
        m_lastname = '$m_lastname', 
        m_mail = '$m_mail', 
        m_nickname = '$m_nickname', 
        m_id = '$m_id', 
        m_phone = '$m_phone', 
        m_area = '$m_area', 
        m_gender = '$m_gender', 
        m_birth = '$m_birth' 
        WHERE id = '$id'";


$pdo->exec($sql);
       
echo "更新成功";


?>
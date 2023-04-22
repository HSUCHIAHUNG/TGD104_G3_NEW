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

// 取得表單資料
$m_firstname = htmlspecialchars($_POST['m_firstname']);
$m_lastname = htmlspecialchars($_POST['m_lastname']);
$m_id = htmlspecialchars($_POST['m_id']);
$m_nickname = htmlspecialchars($_POST['m_nickname']);
$m_mail = htmlspecialchars($_POST['m_mail']);
$m_phone = htmlspecialchars($_POST['m_phone']);
$m_password = htmlspecialchars($_POST['m_password']);
$m_area = $_POST['m_area'];
$m_gender = $_POST['m_gender'];
$m_birth = $_POST['m_birth'];



// 將日期轉換為資料庫可以識別的格式
$formatted_date  = date('Y-m-d', strtotime($m_birth)); 

$sql = "INSERT INTO member(m_firstname, m_lastname, m_id, m_nickname, m_mail, m_phone, m_password, m_area, m_gender, m_birth, m_create_date, m_status, m_collect) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), '正常', JSON_ARRAY())";

$statement = $pdo->prepare($sql);
$statement->bindValue(1,$m_firstname);
$statement->bindValue(2,$m_lastname);
$statement->bindValue(3,$m_id);
$statement->bindValue(4,$m_nickname);
$statement->bindValue(5,$m_mail);
$statement->bindValue(6,$m_phone);
$statement->bindValue(7,$m_password);
$statement->bindValue(8,$m_area);
$statement->bindValue(9,$m_gender);
$statement->bindValue(10,$formatted_date);
$statement->execute();


// select 資料
$sql = "SELECT id FROM member WHERE m_id = ?";

$statement = $pdo->prepare($sql);
$statement->bindValue(1,$m_id);
$statement->execute();

$data = $statement->fetchAll();

if (count($data) > 0) {
  foreach ($data as $index => $row) {
    echo $row["id"];   //欄位名稱
  }
} else {
  echo "No matching records found.";
}

// echo $m_firstname.$m_lastname.$m_mail.$m_birth.$m_password;

?>
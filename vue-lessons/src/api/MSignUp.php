<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
//MySQL相關資訊
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "9090yggep";
$db_select = "G3_TEAM";

//建立資料庫連線物件
$dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);
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

$sql = "INSERT INTO member(m_firstname, m_lastname, m_id, m_nickname, m_mail, m_phone, m_password, m_area, m_gender, m_birth, m_create_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now())";

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

echo '註冊成功';

// echo $m_firstname.$m_lastname.$m_mail.$m_birth.$m_password;

?>
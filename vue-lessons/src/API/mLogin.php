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
$db_pass = "password";
$db_select = "G3_TEAM";

//建立資料庫連線物件
$dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);
// -------------------------------------------

// 取得表單資料
$m_mail = htmlspecialchars($_POST['m_mail']);
$m_password = htmlspecialchars($_POST['m_password']);
 

$sql = "SELECT * FROM member WHERE m_mail = ? and m_password = ?";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$m_mail);
$statement->bindValue(2,$m_password);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);

// if(count($data)>0){
   
// } else {
  
// }

// echo $m_firstname.$m_lastname.$m_mail.$m_birth.$m_password;

?>
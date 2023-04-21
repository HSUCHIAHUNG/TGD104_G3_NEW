<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
//MySQL相關資訊
<<<<<<< HEAD
=======
// $db_host = "127.0.0.1";
// $db_user = "root";
// $db_pass = "password";
// $db_select = "G3_TEAM";

// //建立資料庫連線物件
// $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

// //建立PDO物件，並放入指定的相關資料
// $pdo = new PDO($dsn, $db_user, $db_pass);

>>>>>>> bc258ca1bfbf85c49d957778aeeada829d65a752
require_once ("conn.php");
// -------------------------------------------

$id = $_POST['id'];


$sql = "select m_collect from member where id = '$id'";

$statement = $pdo->query($sql);

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

if(count($data)>0){
  $new_data = json_encode($data);
  echo $new_data;
} else {
  echo '';
}


// $statement = $pdo->prepare($sql);
// $statement->bindValue(1,$id);
// $statement->execute();

// // 取得資料 
// $data = $statement->fetchAll();
// echo json_encode($data);

// if(count($data)>0){
   
// } else {
  
// }

// echo $m_firstname.$m_lastname.$m_mail.$m_birth.$m_password;

?>
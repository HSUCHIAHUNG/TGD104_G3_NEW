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


$sql = "SELECT c.c_firstname, c.c_lastname, c.id, 
c.c_photo1, a.about_title, a.tr_job
FROM consultant c
JOIN about_consultant a
ON c.id = a.about_cid";

$statement = $pdo->query($sql);

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

$new_data = json_encode($data);
echo $new_data;


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
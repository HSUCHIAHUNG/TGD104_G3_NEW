<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
require_once ("conn.php");
// -------------------------------------------

$member_id = $_POST['member_id'];

// 還要補上order_status = 0;
$sql = "select o.id, o.member_id, o.or_booking_date, o.order_status,
o.tro_area, a.about_cost, a.about_class 
from `order` o
join about_consultant a 
on o.consultant_id = a.about_cid 
where o.member_id = ? and o.order_status = '未完成' and a.tr_job is not null;";


$statement = $pdo->prepare($sql);
$statement->bindValue(1,$member_id);
$statement->execute();

// 取得資料 
$data = $statement->fetchAll();
echo json_encode($data);


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
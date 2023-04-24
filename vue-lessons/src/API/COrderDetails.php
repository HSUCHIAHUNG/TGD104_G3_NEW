<?php
  // 建立一個 Express application 物件
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET, POST");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 資料庫-------------------------------------------
require_once ("conn.php");
// -------------------------------------------

$order_id = $_POST['Orderid'];

// 還要補上order_status = 0;
$sql = 
"select 
o.id,
o.or_booking_date,  
o.or_number, 
o.or_order_date, 
o.order_status, 
a.about_cost, 
a.about_class,
m.m_nickname,
m.m_area,
m.m_firstname,
m.m_lastname

from `order` o
join about_consultant a 
on o.consultant_id = a.about_cid
join member m
on o. member_id = m.id
where o.id = '$order_id';";


//執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
$statement = $pdo->query($sql);

//抓出全部且依照順序封裝成一個二維陣列
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
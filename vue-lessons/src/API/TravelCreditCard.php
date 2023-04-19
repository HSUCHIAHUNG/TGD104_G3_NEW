<?php


    
// require_once ("pdo_connect.php");
require_once ("conn.php");

//MySQL相關資訊
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_select = "G3_TEAM";

//建立資料庫連線物件
// $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

// //建立PDO物件，並放入指定的相關資料
// $pdo = new PDO($dsn, $db_user, $db_pass);


//方法二: 放進變數
$member_id =  $_POST["Member_id"];
$consultant_id =  $_POST["Consultant_id"];
$tro_area =  $_POST["Tro_area"];
$or_checkout_method =  $_POST["Or_checkout_method"];
$or_booking_date =  $_POST["Or_booking_date"];
$or_class =  $_POST["Or_class"];
$or_number =  $_POST["Or_number"];



$sql = "INSERT INTO `order`(member_id, consultant_id, tro_area, or_checkout_method, or_booking_date, or_order_date, or_class, order_status, or_number)
VALUES ('$member_id','$consultant_id','$tro_area','$or_checkout_method','$or_booking_date',NOW(),'$or_class','完成','$or_number')";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//執行
$pdo->exec($sql);


echo "新增成功!"




?>

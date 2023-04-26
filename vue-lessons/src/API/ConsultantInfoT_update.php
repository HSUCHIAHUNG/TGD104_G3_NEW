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

// 取得cookies 資料
$about_cid = $_POST['about_cid'];
$tr_interest = $_POST['tr_interest'];
$tr_job = $_POST['tr_job'];
$tr_experience = $_POST['tr_experience'];
$about_class = $_POST['about_class'];
$tr_license = $_POST['tr_license'];
$about_cost = $_POST['about_cost'];
$about_title = $_POST['about_title'];
$about_introduction = $_POST['about_introduction'];

$sql = "UPDATE about_consultant SET 
        tr_interest = '$tr_interest', 
        tr_job = '$tr_job', 
        tr_experience = '$tr_experience', 
        about_class = '$about_class', 
        tr_license = '$tr_license', 
        about_cost = '$about_cost', 
        about_title = '$about_title', 
        about_introduction = '$about_introduction' 
        WHERE id = '$id'";


$pdo->exec($sql);
       
echo "更新成功";


?>
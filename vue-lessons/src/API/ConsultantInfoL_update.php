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
// $id = $_POST['id'];
$about_cost = $_POST['about_cost'];
$about_introduction = $_POST['about_introduction'];
$s_grad = $_POST['s_grad'];
$s_address = $_POST['s_address'];
$s_school = $_POST['s_school'];
$about_title = $_POST['about_title'];
$about_class = $_POST['about_class'];
$about_cid = $_POST['about_cid'];
$s_category = $_POST['s_category'];

$sql = "UPDATE about_consultant SET 
        about_cost = '$about_cost', 
        about_introduction = '$about_introduction', 
        s_grad = '$s_grad', 
        s_address = '$s_address', 
        s_school = '$s_school', 
        about_title = '$about_title', 
        about_class = '$about_class', 
        -- about_cid = '$about_cid', 
        s_category = '$s_category' 
        WHERE about_cid = '$about_cid'";


$pdo->exec($sql);
       
echo "更新成功";


?>
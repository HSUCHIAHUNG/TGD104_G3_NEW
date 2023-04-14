<?php

require_once ("conn.php");

//MySQL相關資訊
// $db_host = "127.0.0.1";
// $db_user = "root";
// $db_pass = "password";
// $db_select = "G3_TEAM";

// $db_host = "127.0.0.1";
// $db_user = "tibamefe_since2021";
// $db_pass = "vwRBSb.j&K#E";
// $db_select = "tibamefe_tgd104g3";

//建立資料庫連線物件
// $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

//建立PDO物件，並放入指定的相關資料
// $pdo = new PDO($dsn, $db_user, $db_pass);


//方法二: 放進變數
$tr_interest =  $_POST["Tr_interest"];
$tr_experience =  $_POST["Tr_experience"];
$tr_license =  $_POST["Tr_license"];
$tr_job =  $_POST["Tr_job"];
$about_cost =  $_POST["About_cost"];
$about_title =  $_POST["About_title"];
$about_class =  $_POST["About_class"];
$about_introduction =  $_POST["About_introduction"];
$s_category =  $_POST["Consultant_id"];


$sql = "INSERT INTO about_consultant(tr_interest,tr_experience,tr_license,tr_job,about_cost,about_title,about_introduction,about_class,s_category) VALUES ('$tr_interest','$tr_experience','$tr_license','$tr_job','$about_cost','$about_title','$about_class','$about_introduction','$s_category')";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//執行
$pdo->exec($sql);


echo "新增成功!"




?>

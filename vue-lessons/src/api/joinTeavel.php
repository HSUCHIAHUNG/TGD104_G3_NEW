<?php


    
// require_once ("pdo_connect.php");
require_once ("conn.php");


//方法二: 放進變數
$tr_interest =  $_POST["Tr_interest"];
$tr_experience =  $_POST["Tr_experience"];
$tr_license =  $_POST["Tr_license"];
$tr_job =  $_POST["Tr_job"];
$about_cost =  $_POST["About_cost"];
$about_title =  $_POST["About_title"];
$about_class =  $_POST["About_class"];
$about_introduction =  $_POST["About_introduction"];
$about_cid =  $_POST["Consultant_id"];


$sql = "INSERT INTO about_consultant(tr_interest,tr_experience,tr_license,tr_job,about_cost,about_title,about_class,about_introduction,about_cid)
 VALUES ('$tr_interest','$tr_experience','$tr_license','$tr_job','$about_cost','$about_title','$about_class','$about_introduction','$about_cid')";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//執行
$pdo->exec($sql);


echo "新增成功!"




?>

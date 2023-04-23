<?php


// require_once ("pdo_connect.php");
require_once ("conn.php");

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//建立SQL
//方法一: 直接塞，但引號問題要用字串相串
// $sql = "INSERT INTO member(Account, PWD, CreateDate) VALUES ('".$_POST['account']."', '".$_POST["password"]."', NOW())";

//方法二: 放進變數
$c_id = htmlspecialchars($_POST["C_id"]);
$c_firstname =  htmlspecialchars($_POST["C_firstname"]);
$c_lastname =  htmlspecialchars($_POST["C_lastname"]);
$c_mail = htmlspecialchars($_POST["C_mail"]);
$c_nickname = htmlspecialchars($_POST["C_nickname"]);
$c_gender = $_POST["C_gender"];
$c_password = htmlspecialchars($_POST["C_password"]);
$c_birth = $_POST["C_birth"];
$c_area = $_POST["C_area"];
$c_phone = htmlspecialchars($_POST["C_phone"]);
$c_personality = htmlspecialchars($_POST["C_personality"]);


$sql = "INSERT INTO consultant(c_id, c_birth, c_firstname, c_lastname, c_mail, c_nickname, c_gender, c_password, c_area, c_phone, c_personality, c_create_date, c_status, c_date) VALUES ('$c_id', '$c_birth', '$c_firstname', '$c_lastname', '$c_mail', '$c_nickname', '$c_gender', '$c_password', '$c_area', '$c_phone', '$c_personality', NOW() ,'正常', '0')";
// $sql = "INSERT INTO consultant(c_id, c_birth, c_firstname, c_lastname, c_mail, c_nickname, c_gender, c_password, c_area, c_phone, c_personality, c_create_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,NOW())";

//執行
$pdo->exec($sql);

// $statement = getPDO()->prepare($sql);
// $statement->bindValue(1 , $c_id);             
// $statement->bindValue(2 , $c_birth);
// $statement->bindValue(3 , $c_firstname);
// $statement->bindValue(4 , $c_lastname);
// $statement->bindValue(5 , $c_mail);
// $statement->bindValue(6 , $c_nickname);
// $statement->bindValue(7 , $c_gender);
// $statement->bindValue(8 , $c_password);
// $statement->bindValue(9 , $c_area);
// $statement->bindValue(10 , $c_phone);
// $statement->bindValue(11 , $c_personality);
// $statement->execute();


echo "新增成功!";


?>
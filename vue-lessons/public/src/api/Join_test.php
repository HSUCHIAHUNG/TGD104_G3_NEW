<?php


//MySQL相關資訊
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "sS654123";
$db_select = "G3_TEAM";

//建立資料庫連線物件
$dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);

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

// echo "$c_birth";

$sql = "INSERT INTO consultant(c_id, c_birth, c_firstname, c_lastname, c_mail, c_nickname, c_gender, c_password, c_area, c_phone, c_personality) VALUES ('$c_id', '$c_birth', '$c_firstname', '$c_lastname', '$c_mail', '$c_nickname', '$c_gender', '$c_password', '$c_area', '$c_phone', '$c_personality')";


//執行
$pdo->exec($sql);

// $statement = $pdo->prepare($sql);
// $statement->bindValue(":account", $Account);
// $statement->bindValue(":pwd", $PWD);
// $statement->execute();

//抓出全部且依照順序封裝成一個二維陣列
// $data = $statement->fetchAll();

// if(count($data) > 0){
//     echo "新增成功!";
// }else{
//     echo "帳號或密碼輸入錯誤!";
// }

// header("Location: Select_test.php");

echo "新增成功!";


?>
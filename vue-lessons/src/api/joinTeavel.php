<?php

//MySQL相關資訊
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_select = "G3_TEAM";

//建立資料庫連線物件
$dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);


//建立SQL
//方法一: 直接塞，但引號問題要用字串相串
// $sql = "INSERT INTO member(Account, PWD, CreateDate) VALUES ('".$_POST['account']."', '".$_POST["password"]."', NOW())";

//方法二: 放進變數
$tr_interest =  $_POST["Tr_interest"];
$sql = "INSERT INTO about_travel(tr_interest) VALUES ('$tr_interest')";
// $sql = "INSERT INTO member(Account = :account, PWD = :pwd, CreateDate) VALUES ('$Account', '$PWD', NOW())";

//執行
$pdo->exec($sql);

    // 建立一個 Express application 物件
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

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

// echo "新增成功!"




?>
<?php


    

//MySQL相關資訊
// $db_host = "127.0.0.1";
// $db_user = "root";
// $db_pass = "password";
// $db_select = "G3_TEAM";

$db_host = "127.0.0.1";
$db_user = "tibamefe_since2021";
$db_pass = "vwRBSb.j&K#E";
$db_select = "tibamefe_tgd104g3";

//建立資料庫連線物件
$dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);


//建立SQL
//方法一: 直接塞，但引號問題要用字串相串
// $sql = "INSERT INTO member(Account, PWD, CreateDate) VALUES ('".$_POST['account']."', '".$_POST["password"]."', NOW())";

//方法二: 放進變數
$tr_interest =  $_POST["Tr_interest"];
$tr_experience =  $_POST["Tr_experience"];
$tr_license =  $_POST["Tr_license"];
$tr_job =  $_POST["Tr_job"];
$tr_cost =  $_POST["Tr_cost"];
$tr_title =  $_POST["Tr_title"];
$tr_category =  $_POST["Tr_category"];
$tr_introduction =  $_POST["Tr_introduction"];


// $sql = "SELECT * FROM about_consultant";
$sql = "INSERT INTO about_consultant(tr_interest) VALUES ('$tr_interest')";
// $sql = "INSERT INTO member(Account = :account, PWD = :pwd, CreateDate) VALUES ('$Account', '$PWD', NOW())";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


//執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
// $statement = $pdo->query($sql);

//抓出全部且依照順序封裝成一個二維陣列
// $data = $statement->fetchAll();

//將二維陣列取出顯示其值
// foreach($data as $index => $row){
//    echo $row["tr_experience"];   //欄位名稱
//    echo " / ";
//    echo $row["tr_interest"];    //欄位名稱
//    echo " / ";
//    echo $row["tr_license"];    //欄位名稱
//     echo "<br>";
//     echo "<br>";
//    }


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

// echo "新增成功!"




?>

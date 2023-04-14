<?php

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       //資料庫連線
       // require_once ("pdo_connect.php");
       $db_host = "127.0.0.1";
       $db_user = "root";
       $db_pass = "sS654123";
       $db_select = "G3_TEAM";

       //建立資料庫連線物件
       $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

       //建立PDO物件，並放入指定的相關資料
       $pdo = new PDO($dsn, $db_user, $db_pass);

       $c_id = $_POST["C_id"];
       //建立SQL語法
        //    $sql = "SELECT id FROM consultant where c_id like ?";
        $sql = "SELECT id FROM consultant where c_id like ?";

       $statement = $pdo->prepare($sql);
       $statement->bindValue(1,"%$c_id%");
       $statement->execute();

       $data = $statement->fetchAll();

       foreach($data as $index => $row){
        echo $row["id"];   //欄位名稱
    }
    //    echo $statement;

       
?>
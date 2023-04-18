<?php

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       //資料庫連線
       // require_once ("pdo_connect.php");
       require_once ("conn.php");

       $id =  $_POST["Id"];

       //建立SQL語法
       $sql = 
       "SELECT 
            *
        FROM consultant c
        join about_consultant a
        on c.id = a.about_cid
        where id = '$id';";

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       echo json_encode($data);


?>
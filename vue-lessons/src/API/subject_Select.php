<?php

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       require_once ("conn.php");

       $sql = "SELECT 
        about_title,
        c_nickname,
        id,
        about_class
              FROM about_consultant abc
              join consultant con
              on abc.about_cid = con.id
              where c_status = '正常' and c_review_status='通過' and s_category = '科目';";

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       echo json_encode($data)
?>
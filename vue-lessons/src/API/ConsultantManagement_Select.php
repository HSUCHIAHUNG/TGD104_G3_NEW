<?php

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       //資料庫連線
       require_once ("conn.php");
       
       //建立SQL語法
       $sql = 
       "SELECT 
            id,
            c_id,
            c_nickname,
            c_phone,
            c_mail,
            c_create_date,
            c_status
        FROM consultant
        WHERE c_review_status = '通過';";

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       echo json_encode($data)
       //將二維陣列取出顯示其值
       // foreach($data as $index => $row){
 //       echo $row["tr_experience"];   //欄位名稱
 //       echo " / ";
 //       echo $row["tr_title"];    //欄位名稱
 //       echo " / ";
 //       echo $row["tr_license"];    //欄位名稱
       //  echo "<br>";
       //  echo "<br>";
       // }

?>
<?php

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       require_once ("conn.php");

       $c_id = $_POST["C_id"];
       //建立SQL語法
        //    $sql = "SELECT id FROM consultant where c_id like ?";
        $sql = "
        select 
        id
        from `order` 
        where or_order_date = '2023-04-23 19:47:20' && consultant_id = '448' ;";

    //    $statement = $pdo->prepare($sql);
    //    $statement->bindValue(1,"%$c_id%");
    //    $statement->execute();

        //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
        $statement = $pdo->query($sql);

        //抓出全部且依照順序封裝成一個二維陣列
        $data = $statement->fetchAll();
 
        echo json_encode($data)

    //    foreach($data as $index => $row){
    //     echo $row["id"];   //欄位名稱
    // }
    //    echo $statement;

       
?>
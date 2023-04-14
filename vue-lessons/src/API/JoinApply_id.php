<?php

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       require_once ("conn.php");

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
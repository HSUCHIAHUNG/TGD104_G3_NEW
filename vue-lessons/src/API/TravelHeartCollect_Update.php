<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    //資料庫連線
    // require_once ("pdo_connect.php");
    require_once ("conn.php");

    $id = $_POST["Id"];
    $m_collect = json_encode($_POST["M_collect"]); // 將 M_collect 轉換為 JSON 格式的字串

    // 建立 SQL 語法
    $sql =
        "UPDATE member
        SET m_collect = :m_collect
        WHERE id = :id";

    // 使用預備陳述式
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':m_collect', $m_collect, PDO::PARAM_STR);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "成功";


?>
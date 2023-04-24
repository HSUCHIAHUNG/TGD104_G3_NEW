<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    //資料庫連線
    // require_once ("pdo_connect.php");
    require_once ("conn.php");

    $id = $_POST["Id"];
    // $c_date = json_encode($_POST["C_date"]); // 將 M_collect 轉換為 JSON 格式的字串

    // 建立 SQL 語法
    // $sql =
    //     "UPDATE consultant
    //     SET c_date = :c_date
    //     WHERE id = :id";

    // // 使用預備陳述式
    // $statement = $pdo->prepare($sql);
    // $statement->bindParam(':c_date', $c_date, PDO::PARAM_STR);
    // $statement->bindParam(':id', $id, PDO::PARAM_INT);
    // $statement->execute();

    // echo "成功";

    $selectSql =
    "SELECT c_date
    FROM consultant
    WHERE id = :id";

    // 使用預備陳述式
    $selectStatement = $pdo->prepare($selectSql);
    $selectStatement->bindParam(':id', $id, PDO::PARAM_INT);
    $selectStatement->execute();

    // 取得原有的 JSON 資料
    $row = $selectStatement->fetch(PDO::FETCH_ASSOC);
    $existingCDate = json_decode($row['c_date'], true); // 將原有的 JSON 資料解碼為陣列
    if (!$existingCDate) {
        $existingCDate = array(); // 若原有的 JSON 資料為 null，則建立一個空陣列
    }

    // 合併新的日期資料到原有的資料
    $newCDate = $_POST["C_date"]; // 新的日期資料陣列
    $updatedCDate = array_merge($existingCDate, $newCDate);

    // 將合併後的資料轉為 JSON 格式的字串
    $c_date = json_encode($updatedCDate);

    // 建立更新 SQL 語法
    $updateSql =
    "UPDATE consultant
    SET c_date = :c_date
    WHERE id = :id";

    // 使用預備陳述式
    $updateStatement = $pdo->prepare($updateSql);
    $updateStatement->bindParam(':c_date', $c_date, PDO::PARAM_STR);
    $updateStatement->bindParam(':id', $id, PDO::PARAM_INT);
    $updateStatement->execute();

    echo "成功";



?>
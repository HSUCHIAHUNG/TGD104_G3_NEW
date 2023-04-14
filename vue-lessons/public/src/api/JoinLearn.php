<?php
    // 建立一個 Express application 物件
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    //MySQL相關資訊
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_pass = "password";
    $db_select = "G3_TEAM";

    //建立資料庫連線物件
    $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

    //建立PDO物件，並放入指定的相關資料
    $pdo = new PDO($dsn, $db_user, $db_pass);


    //放進變數
    $s_address = $_POST["S_address"];
    $s_school = $_POST["S_school"];
    $s_cost = $_POST["S_cost"];
    $s_title = $_POST["S_title"];
    $s_experience = $_POST["S_experience"];
    $s_grad = $_POST["S_grad"];
    $s_category = $_POST["S_category"];
    $s_class = $_POST["S_class"];
    // echo $s_address;
    $sql = "INSERT INTO about_study(s_address, s_school, s_cost, s_title, s_experience, s_grad, s_category, s_class) VALUES ('$s_address', '$s_school', '$s_cost', '$s_title', '$s_experience', '$s_grad', '$s_category', '$s_class')";
    // $sql = "INSERT INTO member(Account = :account, PWD = :pwd, CreateDate) VALUES ('$Account', '$PWD', NOW())";

    //執行
    $pdo->exec($sql);




?>
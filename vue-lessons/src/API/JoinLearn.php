<?php
    // 建立一個 Express application 物件
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    // require_once ("pdo_connect.php");
    require_once ("conn.php");


    //放進變數
    $s_address = $_POST["S_address"];
    $s_school = $_POST["S_school"];
    $about_cost = $_POST["About_cost"];
    $about_title = $_POST["About_title"];
    $about_introduction = $_POST["About_introduction"];
    $s_grad = $_POST["S_grad"];
    $s_category = $_POST["S_category"];
    $about_class = $_POST["About_class"];
    $tr_experience = $_POST["Consultant_id"];
    // echo $s_address;
    $sql = "INSERT INTO about_consultant(s_address, s_school, about_cost, about_title, about_introduction, s_grad, s_category, about_class, tr_experience) 
    VALUES ('$s_address', '$s_school', '$about_cost', '$about_title', '$about_introduction', '$s_grad', '$s_category', '$about_class', '$tr_experience')";
    // $sql = "INSERT INTO member(Account = :account, PWD = :pwd, CreateDate) VALUES ('$Account', '$PWD', NOW())";

    //執行
    $pdo->exec($sql);
?>
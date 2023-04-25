<?php

//MySQL相關資訊 本地用
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "9090yggep";
$db_select = "G3_TEAM";


//MySQL相關資訊 server用
// $db_host = "127.0.0.1";
// $db_user = "tibamefe_since2021";
// $db_pass = "vwRBSb.j&K#E";
// $db_select = "tibamefe_tgd104g3";

//建立資料庫連線物件
$dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);
    
?>



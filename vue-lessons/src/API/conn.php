<?php

 //MySQL相關資訊
    $db_host = "127.0.0.1";
    $db_user = "root";
<<<<<<< HEAD

    $db_pass = "password";

=======
    $db_pass = "9090yggep";
>>>>>>> ca03d1bf83b02caa331b8db57fd760735a1f16e7
    $db_select = "G3_TEAM";


    //建立資料庫連線物件
    $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

    //建立PDO物件，並放入指定的相關資料
    $pdo = new PDO($dsn, $db_user, $db_pass);

?>



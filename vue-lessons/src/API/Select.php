<?php

       // header("Access-Control-Allow-Origin: *");
       // header("Content-Type: application/json; charset=UTF-8");
       // header("Access-Control-Allow-Methods: GET, POST");
       // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       //資料庫連線
       require_once ("pdo_connect.php");
       // require_once ("conn.php");

       // $db_host = "127.0.0.1";
       // $db_user = "root";
       // $db_pass = "password";
       // $db_select = "G3_TEAM";

       //建立資料庫連線物件
       $dsn = "mysql:host=".$db_host.";dbname=".$db_select.";charset=utf8";

       //建立PDO物件，並放入指定的相關資料
       $pdo = new PDO($dsn, $db_user, $db_pass);

       //建立SQL語法
       $sql = "SELECT * FROM about_consultant";

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       json_encode($data);
       //將二維陣列取出顯示其值
       foreach($data as $index => $row){
	      echo $row["tr_experience"];   //欄位名稱
	      echo " / ";
             echo $row["tr_interest"];   //欄位名稱
	      echo " / ";
             echo $row["tr_license"];   //欄位名稱
	      echo " / ";
             echo $row["tr_job"];   //欄位名稱
	      echo " / ";
             echo $row["about_cost"];   //欄位名稱
	      echo " / ";
             echo $row["about_introduction"];   //欄位名稱
	      echo " / ";
             echo $row["s_grad"];   //欄位名稱
	      echo " / ";
             echo $row["s_address"];   //欄位名稱
	      echo " / ";
             echo $row["s_school"];   //欄位名稱
	      echo " / ";
	      echo $row["about_title"];    //欄位名稱
	      echo " / ";
	      echo $row["about_class"];    //欄位名稱
	      echo " / ";
             echo $row["about_cid"];    //欄位名稱
	      echo " / ";
             echo $row["s_category"];    //欄位名稱
	      echo " / ";
             
        echo "<br>";
        echo "<br>";
       }

?>
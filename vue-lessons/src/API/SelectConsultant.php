<?php
       //資料庫連線
       require_once ("pdo_connect.php");
       // require_once ("conn.php");


       //建立SQL語法
       $sql = "SELECT * FROM consultant";

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       //將二維陣列取出顯示其值
       foreach($data as $index => $row){
	      echo $row["id"];   //欄位名稱
	      echo " / ";
	      echo $row["c_id"];    
	      echo " / ";
	      echo $row["c_firstname"];  
             echo " / ";
             echo $row["c_lastname"];    
	      echo " / ";
             echo $row["c_mail"];    
	      echo " / ";
             echo $row["c_nickname"];    
	      echo " / ";
             echo $row["c_gender"];    
	      echo " / ";
             echo $row["c_password"];    
	      echo " / ";
             echo $row["c_birth"];    
	      echo " / ";
             echo $row["c_area"];    
	      echo " / ";
             echo $row["c_phone"];    
	      echo " / ";
             echo $row["c_personality"];  
	      echo " / ";
             echo $row["c_status"];    
	      echo " / ";
             echo $row["c_review_status"];    
	      echo " / ";
             echo $row["c_create_date"];    
	      echo " / ";
             echo $row["c_date"];    
	      echo " / ";
        echo "<br>";
        echo "<br>";
       }

?>
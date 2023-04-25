<?php

       header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       require_once ("conn.php");

       //建立SQL語法
       // $sql = "SELECT * FROM study_require";

       // $sql = "SELECT
       // *
       // FROM study_require qa
       // join member m
       // on qa.member_id = m.id;";

       // $sql = "SELECT option_id, COUNT(*) AS likes_count
       // FROM love_like
       // GROUP BY option_id;";

       // $sql = "SELECT s.*, l.likes_count, m_nickname
       // FROM study_require s
       // LEFT JOIN (
       //   SELECT option_id, COUNT(*) AS likes_count
       //   FROM love_like
       //   GROUP BY option_id
       // ) l ON s.id = l.option_id
       // JOIN member m ON s.member_id = m.id;";


       $sql = "
       SELECT
       b.m_nickname,
       a.sr_time,
       a.id,
       a.sr_content,
       a.love
   FROM study_require a
   JOIN member b ON a.member_id = b.id
   ORDER BY a.sr_time desc;";

       

       //執行並查詢，會回傳查詢結果的物件，必須使用fetch、fetchAll...等方式取得資料
       $statement = $pdo->query($sql);

       //抓出全部且依照順序封裝成一個二維陣列
       $data = $statement->fetchAll();

       echo json_encode($data)
       //將二維陣列取出顯示其值
       // foreach($data as $index => $row){
	//       echo $row["tr_experience"];   //欄位名稱
	//       echo " / ";
	//       echo $row["tr_title"];    //欄位名稱
	//       echo " / ";
	//       echo $row["tr_license"];    //欄位名稱
       //  echo "<br>";
       //  echo "<br>";
       // }

?>
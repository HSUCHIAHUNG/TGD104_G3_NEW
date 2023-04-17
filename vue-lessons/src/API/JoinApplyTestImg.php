<?php

// print_r($_FILES["C_photo1"]); 

header("Access-Control-Allow-Origin: *");
       header("Content-Type: application/json; charset=UTF-8");
       header("Access-Control-Allow-Methods: GET, POST");
       header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

       require_once ("conn.php");

//判斷是否上傳成功
if($_FILES["C_photo1"]["error"] > 0){
    echo "上傳失敗: 錯誤代碼".$_FILES["C_photo1"]["error"];
}else{
    //取得上傳的檔案資訊=======================================
    $fileName = $_FILES["C_photo1"]["name"];    //檔案名稱含副檔名        
    $filePath_Temp = $_FILES["C_photo1"]["tmp_name"];   //Server上的暫存檔路徑含檔名        
    $fileType = $_FILES["C_photo1"]["type"];    //檔案種類        
    $fileSize = $_FILES["C_photo1"]["size"];    //檔案尺寸
    //=======================================================

    //Web根目錄真實路徑  ($_SERVER是php內建)
    $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
    // echo $ServerRoot;  c://xampp/
    
    //檔案最終存放位置  (自訂路徑)
    $filePath = $ServerRoot."/TGD104_G3_NEW/vue-lessons/src/Upload/".$fileName;

    //將暫存檔搬移到正確位置
    move_uploaded_file($filePath_Temp, $filePath);

    //顯示檔案資訊
    echo "檔案存放位置：".$filePath;
    echo "<br/>";
    echo "類型：".$fileType;
    echo "<br/>";
    echo "大小：".$fileSize;
    echo "<br/>";
    echo "副檔名：".getExtensionName($filePath);
    echo "<br/>";
    echo "<img src='/TGD104_G3_NEW/vue-lessons/src/Upload/".$fileName."'/>";
}

//建立SQL


//方法二: 放進變數
// $c_id = htmlspecialchars($_POST["C_id"]);
// $c_firstname =  htmlspecialchars($_POST["C_firstname"]);
// $c_lastname =  htmlspecialchars($_POST["C_lastname"]);
// $c_mail = htmlspecialchars($_POST["C_mail"]);
// $c_nickname = htmlspecialchars($_POST["C_nickname"]);
// $c_gender = $_POST["C_gender"];
// $c_password = htmlspecialchars($_POST["C_password"]);
// $c_birth = $_POST["C_birth"];
// $c_area = $_POST["C_area"];
// $c_phone = htmlspecialchars($_POST["C_phone"]);
// $c_personality = htmlspecialchars($_POST["C_personality"]);


// $sql = "INSERT INTO consultant(c_id, c_birth, c_firstname, c_lastname, c_mail, c_nickname, c_gender, c_password, c_area, c_phone, c_personality, c_create_date) VALUES ('$c_id', '$c_birth', '$c_firstname', '$c_lastname', '$c_mail', '$c_nickname', '$c_gender', '$c_password', '$c_area', '$c_phone', '$c_personality', NOW())";


//執行
// $pdo->exec($sql);



// echo "新增成功!";


?>
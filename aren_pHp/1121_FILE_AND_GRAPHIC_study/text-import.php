<?php
/****
 * 1.建立資料庫及資料表
 * 2.建立上傳檔案機制
 * 3.取得檔案資源
 * 4.取得檔案內容
 * 5.建立SQL語法
 * 6.寫入資料庫
 * 7.結束檔案
 */


if(!empty($_FILES['text']['tmp_name'])){
    echo "檔名是:".$_FILES['text']['name'];
    echo "<br>";
    echo "檔案大小是:".$_FILES['text']['size'];
    echo "<hr>";

    move_uploaded_file($_FILES['text']['tmp_name'],"C:\Users\user\Documents/{$_FILES['text']['name']}");
    $path="C:\Users\user\Documents/{$_FILES['text']['name']}";
    // 使用 'r' 模式來讀取檔案
$file = fopen($path, "r");

if ($file) {
    // 讀取檔案到最後
    while (($line = fgets($file)) !== false) {
        echo $line;
        echo "<br>";
    }
    fclose($file);
} else {
    // 檔案開啟失敗
    echo "檔案開啟失敗";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文字檔案匯入</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="header">文字檔案匯入練習</h1>
<!---建立檔案上傳機制--->
<form action="?" method="post" enctype="multipart/form-data">
<input type="file" name="text" id="text">
<input type="submit" value="上傳">

</form>


<!----讀出匯入完成的資料----->



</body>
</html>
<html>
<head><title>データの追加</title></head>
<body>
<?php
$p_name = $_POST['p_name'];
$kana = $_POST['kana'];
$kosuu = $_POST['kosuu'];
$money = $_POST['money'];
$p_picture = $_POST['p_picture'];
$category = $_POST['category']
$u_id = $_GET['u_id']
$m_id = $_POST['m_id']
if ($p_name == ""){
    exit ("タイトルが入力されていません");
}

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("データベース接続エラー.<br />");
}

mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");
    
$sql = "INSERT INTO property(p_name, kana, kosuu, money, p_picture, category, u_id, m_id) VALUES('$p_name', '$kana', '$kosuu', '$money', '$p_picture', '$category', '$u_id', '$m_id')";

mysqli_query($conn, $sql)
   or die("登録できませんでした");
print("登録しました。<a href=\"index.html\">index.html</a>で確認してください。");
?>
</body>
</html>

<html>
<head><title>管理場所データの追加</title></head>
<body>
<?php
$m_name = $_POST['m_name'];
$m_picture = $_POST['m_picture'];
$des = $_POST['description'];
//printf("%d",$u_id");
//print("$_GET['u_id']");
//if(isset($_GET['u_id'])){
$u_id = $_POST['u_id'];
//}
//print("$u_id");
if ($m_name == ""){
    exit ("タイトルが入力されていません");
}

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("データベース接続エラー.<br />");
}

mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");
    
$sql = "INSERT INTO management(m_name, m_picture, description, u_id) VALUES('$m_name', '$m_picture', '$des', '$u_id')";

mysqli_query($conn, $sql)
   or die("登録できませんでした");
print("登録しました。<a href=\"index.html\">index.html</a>で確認してください。");
?>
</body>
</html>

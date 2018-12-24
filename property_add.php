<html>
<head><title>データの追加</title></head>
<body>
<?php
include("header.html");
$p_name = $_POST['p_name'];
$kana = $_POST['kana'];
$kosuu = $_POST['kosuu'];
$money = $_POST['money'];
//$p_picture = $_POST['p_picture'];
$category = $_POST['category'];
//printf("%d",$u_id");
//print("$_GET['u_id']");
//if(isset($_GET['u_id'])){
$u_id = $_POST['u_id'];
//}
//print("$u_id");
$m_id = $_POST['m_id'];
if ($p_name == ""){
    exit ("資産名が入力されていません");
}

if ($m_id == ""){
    exit("管理場所IDが入力されていません。");
}

if ($kosuu == ""){
    exit("個数が入力されていません。");
}

if ($money == ""){
    exit("金額が入力されていません。");
}

if ($category == ""){
    exit("カテゴリーが入力されていません。");
}

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("データベース接続エラー.<br />");
}

mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");
    
$sql = "INSERT INTO property(p_name, kana, kosuu, money, category, u_id, m_id) VALUES('$p_name', '$kana', '$kosuu', '$money', '$category', '$u_id', '$m_id')";

mysqli_query($conn, $sql)
   or die("登録できませんでした");
print("登録しました。<a href=\"index.html\">index.html</a>で確認してください。");
?>
</body>
</html>

<html>
<head><title>ユーザーデータの追加</title></head>
<body>
<?php
include('header.html');
$u_name = $_POST['u_name'];
$debt = $_POST['debt'];
if ($u_name == ""){
    exit ("名前が入力されていません");
}

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("データベース接続エラー.<br />");
}

mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");
    
$sql = "INSERT INTO user(u_name, debt) VALUES('$u_name', '$debt')";

mysqli_query($conn, $sql)
   or die("登録できませんでした");
print("登録しました。<a href=\"user.php\">user.php</a>で確認してください。");
?>
</body>
</html>

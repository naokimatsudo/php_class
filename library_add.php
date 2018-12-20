<html>
<head><title>データの追加</title></head>
<body>
<?php
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$auth = $_POST['auth'];
$pub = $_POST['pub'];
$pubyear = $_POST['pubyear'];
if ($title == ""){
    exit ("タイトルが入力されていません");
}

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("データベース接続エラー.<br />");
}

mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");
    
$sql = "INSERT INTO book_table(bisbn, btitle, bauth, bpub, bpubyear) VALUES('$isbn', '$title', '$auth', '$pub', '$pubyear')";

mysqli_query($conn, $sql)
   or die("登録できませんでした");
print("登録しました。<a href=\"search_form.html\">search_form.html</a>で確認してください。");
?>
</body>
</html>

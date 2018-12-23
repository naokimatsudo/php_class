<html>
<head><title>資産の削除</title></head>
<body>
<?php
    $id = $_GET['bid'];

    $host = "localhost";
    $mysqli = new mysqli($host, "s1611555", "s1611555new", "s1611555");
    if ($mysqli->connect_error) {
        die("MySQL接続エラー.<br />");
    } else {
        $mysqli->set_charset("utf8");
    }

    $sql = "DELETE FROM property WHERE p_id='$id'";
    $mysqli->query($sql)
        or die("削除できませんでした");
print("削除しました。<a href=\"user_search.php\">自身のプロフィールページ</a>で確認してください。");
?>
</body>
</html> 

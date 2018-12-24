<html>
<head><title>管理場所</title></head>
<body>
<?php
include("header.html");
$id = $_GET['bid'];

$host = "localhost";
$mysqli = new mysqli($host, "s1611555", "s1611555new", "s1611555");
if ($mysqli->connect_error) {
    die("MySQL接続エラー.<br />");
}else{
    $mysqli->set_charset("utf8");
}

$sql = "select * from management WHERE m_id='".$id."'";
$res=$mysqli->query($sql);

//print("<table border=\"1\">");
print("管理場所は");
$row = $res->fetch_array(); 
print($row["m_name"]);
print("です。")
?>
</body>
</html>

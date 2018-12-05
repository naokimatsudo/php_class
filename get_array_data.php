<html>
<head><title>配列データの取得</title></head>
<body>
<table border="1">
<tr><td>名前</td><td>id</td></tr>
<?php
$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("MySQL接続エラー.<br />");
}
mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM favorite LIMIT 10";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["name"]."</td>");
    print("<td>".$row["fruit_id"]."</td>");
    print("</tr>\n");
}
mysqli_free_result($res);
?>
</table>
</body>
</html>

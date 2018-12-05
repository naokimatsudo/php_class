<title>検索結果</title></head>
<body>
<?php
print("<h1>あなたのプロフィールです</h1>");
$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("データベース接続エラー.<br />");
}
mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");

$condition = "";

if(isset($_POST["name"]) && ($_POST["name"] != "")){
    $name = mysqli_escape_string($conn, $_POST["name"]);
    $name = str_replace("%", "\%", $name);
    $condition = "WHERE u_name LIKE \"%".$name."%\"";
}




$sql = "SELECT * FROM user ".$condition." ORDER BY id LIMIT 10";
$res = mysqli_query($conn, $sql);

print("<table border=\"1\">");
print("<tr><td>名前</td><td>借金</td></tr>");
while($row = mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["u_name"]."</td>");
    print("<td>".$row["debt"]."</td>");
    print("<td><a href= \"property_search.php?bid=".$row["id"]."\">資産一覧</a></td>");
    print("<td><a href= \"library_delete.php?bid=".$row["id"]."\">削除</a></td>");
    print("</tr>");
}
print("</table>");
mysqli_free_result($res);
?>
</body>
</html>


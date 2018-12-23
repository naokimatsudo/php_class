<html>
<head><title>あなたの管理場所一覧</title></head>
<body>
<?php
include('header.html');
$id = $_GET['bid'];
//print("<h1>あなたの資産は以下の通りです</h1>");
$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new","s1611555")){
    die("データベース接続エラー<br />");
}
mysqli_select_db($conn, "dblecture");
mysqli_set_charset($conn, "utf8");


$sql = "select * from management  WHERE u_id='".$id."'";
$res=mysqli_query($conn, $sql);
$row_cnt = $res->num_rows;
if($row_cnt >= 1){
print("<h1>あなたの管理場所は以下の通りです</h1>");
print("<table border=\"1\">");
print("<tr><td>管理場所</td><td>説明</td><td></td></tr>");
while ($row=mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["m_name"]."</td>");
    print("<td>".$row["description"]."</td>");
    print("<td><a href= \"management_delete.php?bid=".$row["m_id"]."\">削除</a></td>");
}
    print("</tr>");
print("</table>");
$row=mysqli_fetch_array($res);
}else{
print("現在、あなたの管理場所は登録されていません。");
}
print("<td><a href= \"add_management_form.php?bid=".$id."\">管理場所追加</a></td>");
?>
</body>
</html> 

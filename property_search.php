<html>
<head><title>あなたの資産</title></head>
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


$sql = "select * from property  WHERE u_id='".$id."'";
$res=mysqli_query($conn, $sql);
$row_cnt = $res->num_rows;
if($row_cnt >= 1){
print("<h1>あなたの資産は以下の通りです</h1>");
print("<table border=\"1\">");
print("<tr><td>資産名</td><td>金額</td><td>カテゴリー</td></tr>");
while ($row=mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["p_name"]."</td>");
    print("<td>".$row["money"]."</td>");
    print("<td>".$row["category"]."</td>");
    print("<td><a href= \"property_delete.php?bid=".$row["p_id"]."\">削除</a></td>");
}
    print("</tr>");
print("</table>");
$row=mysqli_fetch_array($res);
}else{
print("現在、あなたの資産は登録されていません。");
}
print("<td><a href= \"add_property_form.php?bid=".$id."\">資産追加</a></td>");
?>
</body>
</html> 

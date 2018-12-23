<title>検索結果</title></head>
<body>
<?php
include('header.html');
/*if($_POST["name"]){
print("<h1>あなたのプロフィールです</h1>");
}*/
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
}/*else{
    print("正しいユーザー名を入力して下さい。");
}*/




$sql = "SELECT * FROM user ".$condition." ORDER BY id LIMIT 10";
$res = mysqli_query($conn, $sql);

/*検索結果の行数を調べる*/

$row_cnt = $res->num_rows;
//printf("行数は %d です。",$row_cnt);

//検索結果が一つだった場合
if($row_cnt==1){
print("<h1>あなたのプロフィールです</h1>");
print("<table border=\"1\">");
print("<tr><td>名前</td><td>借金</td></tr>");
while($row = mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["u_name"]."</td>");
    print("<td>".$row["debt"]."</td>");
    print("<td><a href= \"property_search.php?bid=".$row["id"]."\">資産一覧</a></td>");
    print("<td><a href= \"management_search.php?bid=".$row["id"]."\">管理場所一覧</a></td>");
    print("<td><a href= \"user_update_form.php?bid=".$row["id"]."\">プロフィール更新</a></td>");
    print("<td><a href= \"user_delete.php?bid=".$row["id"]."\">削除</a></td>");
    print("</tr>");
}
print("</table>");
//検索結果複数存在する場合
}elseif($row_cnt>=2){
print("<a href=\"user_search.php\">ユーザーを絞り込めませんでした。再度正しいユーザー名を検索して下さい。</a>");
//検索結果が一つもない場合
}else{
print("<a href=\"user_search.php\">正しいユーザー名を入力して下さい。</a>");
}
mysqli_free_result($res);
?>
</body>
</html>


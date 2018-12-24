<title>検索結果</title></head>
<body>
<?php
include('header.html');
/*if($_POST["name"]){
print("<h1>あなたのプロフィールです</h1>");
}*/
$host = "localhost";
$mysqli = new mysqli ($host, "s1611555", "s1611555new", "s1611555");
if ($mysqli->connect_error){
    die("データベース接続エラー.<br />");
}else{
  $mysqli->set_charset("utf8");
}

$condition = "";
$m_name = $_POST["name"];

if($m_name==""){
  exit("カテゴリーを入力してください。<br />");
}
if(isset($m_name) && ($m_name != "")){
    $name = $mysqli->escape_string($m_name);
    $name = str_replace("%", "\%", $name);
    $condition = "WHERE management.m_name LIKE \"%".$name."%\"";
}/*else{
    print("正しいユーザー名を入力して下さい。");
}*/
//print($_POST["u_id"]);
if(isset($_POST["u_id"]) && ($_POST["u_id"] != "")){
    $u_id = $mysqli->escape_string($_POST["u_id"]);
    $u_id = str_replace("%", "\%", $u_id);
    $u_id = (int) $u_id; 
    if($condition == ""){
        $condition = "WHERE property.u_id = ".$u_id."";
    }else{
        $condition .= " AND property.u_id = ".$u_id."";
    }
}
//echo gettype($u_id), "\n";
$condition .= " AND property.m_id = management.m_id ";

$sql = "SELECT * FROM property, management ".$condition."";
//print($sql);
$res = $mysqli->query($sql);

$res_cnt=$res->num_rows;
if($res_cnt==0){
  exit("検索した結果、一致するカテゴリーがありませんでした
。");
}
//print($sql);
print "検索結果「${m_name}」は以下の通りです。<br>";
print("<table border=\"1\">");
print("<tr><td>資産名</td><td>金額</td><td>カテゴリー</td><td>個数</td></tr>");
while($row = $res->fetch_array()) {
    print("<tr>");
    print("<td>".$row["p_name"]."</td>");
    print("<td>".$row["money"]."</td>");
    print("<td>".$row["category"]."</td>");
    print("<td>".$row["kosuu"]."</td>");
    print("</tr>");
}
print("</table>");
//検索結果複数存在する場合
//}elseif($row_cnt>=2){
//print("<a href=\"user_search.php\">ユーザーを絞り込めませんでした。再度正しいユーザー名を検索して下さい。</a>");
//検索結果が一つもない場合
//}else{
//print("<a href=\"user_search.php\">正しいユーザー名を入力して下さい。</a>");
//}
//}
$res->free();
?>
</body>
</html>


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


$sql = "select * from property INNER JOIN management ON property.m_id = management.m_id WHERE property.u_id='".$id."' AND management.u_id = '".$id."' ";

//print($sql);
$res=mysqli_query($conn, $sql);

$money=0;
$row_cnt = $res->num_rows;
if($row_cnt >= 1){
print("<h1>あなたの資産は以下の通りです</h1>");
print("<table border=\"1\">");
print("<tr><td>資産名</td><td>金額</td><td>カテゴリー</td><td>個数</td><td>管理場所</td></tr>");
while ($row=mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["p_name"]."</td>");
    print("<td>".$row["money"]."</td>");
    $money = $money +  $row["money"];
    print("<td>".$row["category"]."</td>");
    print("<td>".$row["kosuu"]."</td>");
    $int = (int) $row["m_id"];
    //echo gettype($int);
    //$sql1 = "select * from management WHERE m_id='".$int."'";
    //print($sql1);
    //$res1=mysqli_query($conn, $sql1);
    //$row1=mysqli_fetch_array($res);
    //print(".$row1.");
    print("<td>".$row["m_name"]."</td>");
    //print("<td><a href= \"management_click.php?bid=".$int."\">管理場所</a></td>");
    print("<td><a href= \"property_delete.php?bid=".$row["p_id"]."\">削除</a></td>");
}
    print("</tr>");
print("</table>");
print("あなたの資産の合計金額は".$money."円です。");
print("<br>");
$row=mysqli_fetch_array($res);
}else{
print("現在、あなたの資産は登録されていません。");
}
print("<ul>");
print("<li><a href= \"debt_calc.php?bid=".$id."&mon=".$money."\">借金返済できるかな</a></li>");
print("<li><a href= \"add_management_form.php?bid=".$id."\">管理場所追加</a></li>");
print("<li><a href= \"add_property_form.php?bid=".$id."\">資産追加</a></li>");
print("<li><a href= \"category_form.php?bid=".$id."\">カテゴリー検索</a></li>");
print("<li><a href= \"management_form.php?bid=".$id."\">管理場所検索</a></li>");
print("</ul>");
?>
</body>
</html> 

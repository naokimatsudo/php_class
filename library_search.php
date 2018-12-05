<html>
<head><title>検索結果</title></head>
<body>
<?php
$host = "localhost";
if (!$conn = mysqli_connect($host, "s1611555", "s1611555new", "s1611555")){
    die("データベース接続エラー.<br />");
}
mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");

$condition = "";

if(isset($_POST["title"]) && ($_POST["title"] != "")){
    $title = mysqli_escape_string($conn, $_POST["title"]);
    $title = str_replace("%", "\%", $title);
    $condition = "WHERE btitle LIKE \"%".$title."%\"";
}

if(isset($_POST["auth"]) && ($_POST["auth"] != "")){
    $auth = mysqli_escape_string($conn, $_POST["auth"]);
    $auth = str_replace("%", "\%", $auth);
    if ($condition == ""){
        $condition = "WHERE bauth LIKE \"%".$auth."%\"";
    } else{
        $condition .= "AND bauth LIKE \"%".$auth."%\"";
    }
}


$pyear=$_POST["pyear"];
print $pyear;
$pyear_kata= gettype($pyear);
print $pyear_kata;
/*$_POST["pyear"]の型はstring*/
if(isset($_POST["pyear"]) && ($_POST["pyear"] != "")){
    $pyear = mysqli_escape_string($conn, $_POST["pyear"]);
    $pyear = str_replace("%", "\%", $pyear);
    if ($condition == ""){
	print("$condition");
        $condition = "WHERE bpubyear >= $pyear";
	print("$condition");
    } else{
	print("$condition");
        $condition .= "AND bpubyear >= $pyear";
	print("$condition");
    }
}



$sql = "SELECT * FROM book_table ".$condition." ORDER BY bid LIMIT 10";
$res = mysqli_query($conn, $sql);

print("<table border=\"1\">");
print("<tr><td>ISBNコード</td><td>題名</td><td>著者</td><td>出版社</td><td>出版年</td><td>更新</td><td>削除</td></tr>");
while($row = mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["bisbn"]."</td>");
    print("<td>".$row["btitle"]."</td>");
    print("<td>".$row["bauth"]."</td>");
    print("<td>".$row["bpub"]."</td>");
    print("<td>".$row["bpubyear"]."</td>");
    print("<td><a href= \"query2.php?bid=".$row["bid"]."\">更新</a></td>");
    print("<td><a href= \"library_delete.php?bid=".$row["bid"]."\">削除</a></td>");
    print("</tr>");
}
print("</table>");
mysqli_free_result($res);
?>
</body>
</html>

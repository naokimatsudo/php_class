<html>
<head><title>簡易接続</title></head>
<body>
<?php
$conn = mysqli_connect("localhost", "s1611555", "s1611555new","s1611555");
mysqli_select_db($conn, "kisop");
mysqli_set_charset($conn, "utf8");
$res = mysqli_query($conn, "SHOW TABLES");
if($res){
    print ("データ獲得に成功しました。");
}
mysqli_free_result($res);
?>
</body>
</html>

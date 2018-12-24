<html>
<head><title>借金返済できるかな</title></head>
<body>
<?php

include("header.html");
$id = $_GET['bid'];
$money = $_GET['mon'];

$host = "localhost";
$mysqli = new mysqli($host, "s1611555", "s1611555new", "s1611555");
if ($mysqli->connect_error) {
    die("MySQL接続エラー.<br />");
}else{
    $mysqli->set_charset("utf8");
}

$sql = "select * from user WHERE id='".$id."'";
$res=$mysqli->query($sql);

$row = $res->fetch_array();
$debt = $row["debt"];

$calc = $money - $debt;


if($calc >= 0){
print("どうやらできるようです！");
}else{
$calc_rev = -$calc;
print("${calc_rev}円足りないので、返済できないようです。");
}

?>

</body>
</html> 

<html>
<head><title>データの更新</title></head>
<body>
<?php
    $id = $_GET['id'];

    $host = "localhost";
    $mysqli = new mysqli($host, "s1611555", "s1611555new", "s1611555");
    if ($mysqli->connect_error) {
        die("MySQL 接続エラー.<br />");
    } else {
        $mysqli->set_charset("utf8"); //utf8 コードの利用にはこれが必要
    }

    $item = "";

    $u_name = $_POST['u_name'];
    if($u_name != ""){
        $u_name = str_replace("%", "\%", $mysqli->escape_string($u_name));
        $item = "u_name='$u_name'";
    }

    $debt = $_POST['debt'];
    if($debt != ""){
        $debt = str_replace("%", "\%", $mysqli->escape_string($debt));
        if($item == ""){
            $item = "debt='$debt'";
        }else{
            $item .= ", debt='$debt'";
        }
    }

    $sql = "UPDATE user SET ".$item." WHERE id='$id'";
    $mysqli->query($sql)
    or die("更新できませんでした");
    print("更新しました。<a href=\"index.html\">index.html</a>で確認してくだ
さい。");
?>
</body>
</html>

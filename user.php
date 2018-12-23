<html>
<head><title>ユーザー情報</title></head>
<body>
<?php include ('header.html'); ?>
<table border="1">
<?php
  $mysqli = new mysqli("localhost", "s1611555", "s1611555new", "s1611555");
  $mysqli->set_charset("utf8"); //utf8 コードの利用にはこれが必要
  $sql = "SELECT * FROM user";
  $res = $mysqli->query($sql);
  print("<tr>");
  for( $i = 0; $i < $res->field_count; $i++ ){
    print( "<td>".$res->fetch_field_direct($i)->name."</td>" );
 }
  print("</tr>");
  while($row = $res->fetch_array()) {
    print("<tr>");
    for( $i = 0; $i < $res->field_count; $i++ ){
      print( "<td>".$row[$i]."</td>" );	
    }
    print("<td><a href= \"property_search.php?bid=".$row["id"]."\">資産一覧</a></td>");
    print("</tr>");
  }
?>
</table>
</body>
</html>

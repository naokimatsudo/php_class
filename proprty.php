<html>
<head><title> 結果リソースから情報を得る </title></head>
<body>
<table border="1">
<?php
  $mysqli = new mysqli("localhost", "s1611555", "s1611555new", "s1611555");
  $mysqli->set_charset("utf8"); //utf8 コードの利用にはこれが必要
  $sql = "SELECT * FROM property";
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
    print("</tr>");
  }
?>
</table>
</body>
</html>


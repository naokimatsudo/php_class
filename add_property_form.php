<html>
<head><title>資産追加フォーム</title></head>
<body>
<?php include('header.html'); ?>
あなたの資産データを追加します。
管理場所IDが分からない場合は
<?php
print("<a href=\"management_search.php?bid=".$_GET['bid']."\">ここ</a>");
print("を参照して下さい。<br />");
print("金額は個数を考慮した金額を入力してください
。");
?>
<form action="property_add.php" method="post">
<table border="1">
<tr>
<td>資産名</td>
<td><input type="text" name="p_name"></td>
</tr>
<tr>
<td>かな名</td>
<td><input type="text" name="kana"></td>
</tr>
<tr>
<td>個数</td>
<td><input type="text" name="kosuu"></td>
</tr>
<tr>
<td>金額</td>
<td><input type="text" name="money"></td>
</tr>
<tr>
<td>カテゴリー</td>
<td><input type="text" name="category"></td>
</tr>
<!--<tr>-->
<!--<td>ユーザーid</td>-->
<!--<td>-->
<input type="hidden" name="u_id" value=<?php print( $_GET['bid'] ); ?>><!--</td>-->
<!--</tr>-->
<tr>
<td>管理場所id</td>
<td><input type="text" name="m_id"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="追加"></td>
</tr>
</table>
</form>
</body>
</html>

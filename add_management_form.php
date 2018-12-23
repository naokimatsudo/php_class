<html>
<head><title>管理場所追加フォーム</title></head>
<body>
<?php include('header.html'); ?>
あなたの管理場所データを追加します。
<form action="management_add.php" method="post">
<table border="1">
<tr>
<td>管理場所名</td>
<td><input type="text" name="m_name"></td>
</tr>
<tr>
<td>説明</td>
<td><textarea rows="5" cols="18" name="description"></textarea></td>
</tr>
<tr>
<td>写真</td>
<td><input type="text" name="m_picture"></td>
</tr>
<!--<tr>-->
<!--<td>ユーザーid</td>-->
<!--<td>-->
<input type="hidden" name="u_id" value=<?php print( $_GET['bid'] ); ?>><!--</td>-->
<!--</tr>-->
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="追加"></td>
</tr>
</table>
</form>
</body>
</html>


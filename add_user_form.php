<html>
<head><title>ユーザー追加フォーム</title></head>
<body>
<?php include('header.html'); ?>
ユーザーデータを追加します。
<form action="user_add.php" method="post">
<table border="1">
<tr>
<td>名前</td>
<td><input type="text" name="u_name"></td>
</tr>
<tr>
<td>借金額</td>
<td><input type="text" name="debt"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="追加"></td>
</tr>
</table>
</form>
</body>
</html>


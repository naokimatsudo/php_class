<html>
<head><titleプロフィール>更新フォーム</title></head>
<body>
プロフィールデータを更新します。
<form action="user_update.php?id=<?php print( $_GET['bid'] ); ?>" method="post">
<table border="1" cellspacing="0">
<tr>
<td>ユーザー名</td>
<td><input type="text" name="u_name"></td>
</tr>
<tr>
<td>借金額</td>
<td><input type="text" name="debt"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="更新"></td>
</tr>
</table>
</form>
</body>
</html>

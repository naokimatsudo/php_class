<html>
<head><title>管理場所検索</title></head>
<body>
<?php include('header.html'); ?>
<h1>管理場所検索</h1>
<h3>登録されている管理場所の名前を入力してください、その管理場所に保存されている資産を検索できます。</h3>
<form action="management_result.php" method="post">
<table border="1" cellspacing="0">
<tr>
<td>管理場所名</td>
<td><input type="text" name="name"></td>
</tr>
<input type="hidden" name="u_id" value=<?php print( $_GET['bid'] ); ?>>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="検索"></td>
</tr>
</table>
</form>
</body>
</html>

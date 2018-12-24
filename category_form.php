<html>
<head><title>ユーザー検索</title></head>
<body>
<?php include('header.html'); ?>
<h1>カテゴリ検索</h1>
<h3>登録されている資産のカテゴリを入力してください、そのカテゴリだけに絞ります</h3>
<form action="category_result.php" method="post">
<table border="1" cellspacing="0">
<tr>
<td>カテゴリー名</td>
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

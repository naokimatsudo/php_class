<html>
<head><title>ユーザー検索</title></head>
<body>
<?php include('header.html'); ?>
<h1>ユーザー検索</h1>
<h3>登録されているユーザー名(フルネーム)を入力してください、プロフィールページに遷移する事ができます</h3>
<form action="user_result.php" method="post">
<table border="1" cellspacing="0">
<tr>
<td>名前</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="検索"></td>
</tr>
</table>
</form>
<a href="add_user_form.html">新規登録</a>
</body>
</html>

<?php
session_start();
$token = bin2hex(random_bytes(32));
$_SESSION["token"] =$token;
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>ログイン</title>
		<link rel="stylesheet" href="css/login.css">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<div id="container">
			<h1>ログイン</h1>
			<form action="auth.php" method="post">
				<dl>
					<dt><label for="u_name">ユーザー名</label></dt>
					<dd><input type="text" name="u_name" id="u_name"></dd>
					<dt><label for="pass">パスワード</label></dt>
					<dd><input type="password" name="pass" id="pass"></dd>
				</dl>
				<input type="hidden" name="token" value="<?php echo $token; ?>">
				<button type="submit">ログイン</button>
			</form>
		</div>
	</body>
</html>
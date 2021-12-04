<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>ユーザー登録</title>
		<link rel="stylesheet" href="css/u_form.css">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<div id="container">
			<div class="header_img"><img src="img/vagi.jpg" alt=""></div>
			<h1>ユーザー登録</h1>
			<?php
			if(isset($_GET["err"])){
				echo "使われているユーザー名です";	
			}
			?>
			<form action="controller/user_regist.php" method="post">
				<dl>
					<dt><label for="u_name">ユーザー名</label></dt>
					<dd><input type="text" name="u_name" id="u_name"></dd>
					<dt><label for="pass">パスワード</label></dt>
					<dd><input type="password" name="pass" id="pass"></dd>
				</dl>
				<button type="submit">登録</button>
			</form>
			<div class="two">
				<div>
					<img src="img/body.jpg" alt="">
				</div>
				<div>
				<img src="img/body_man.jpg" alt="">
				</div>			
			</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>脂質制限</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width">
		<script
		  src="https://code.jquery.com/jquery-3.6.0.min.js"
		  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		  crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="container">
			<h1>脂質制限</h1>
			<h2>摂取カロリーの計算</h2>
			<form action="calc.php" method="post">
				<p><input type="text" name="c_weight" value="体重を入力してください"></p>
				<button type="submit">送信</button>
			</form>
		</div>
		<script src="js/app.js"></script>
	</body>
</html>
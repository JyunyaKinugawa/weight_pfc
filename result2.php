<?php
require_once("./controller/session_check.php");
require_once("./controller/config.php");
$sql = "SELECT * FROM c_weight WHERE u_name=:u_name";
$stmt =$pdo->prepare($sql);
$stmt->bindValue(":u_name",$_SESSION["u_name"],PDO::PARAM_STR);
$stmt->execute();
$row =$stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>糖質制限の必要カロリー数</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width=device-width">
		<script
		  src="https://code.jquery.com/jquery-3.6.0.min.js"
		  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		  crossorigin="anonymous"></script>
	</head>
	<body>
		<div id="container">
			<p><a href="logout.php">ログアウト</a></p>
			<h1>糖質制限の必要カロリー数</h1>
			<h2><?php echo $_SESSION["u_name"]; ?>さんが糖質制限ダイエットを成功させるのに必要な栄養素</h2>
			<p>摂取可能カロリー(/日)<?php echo $row["c_max_cal"]; ?>(kcal)</p>
			<p>タンパク質:<?php echo $row["c_max_p"]; ?>(g)</p>
			<p>脂質:<?php echo $row["c_max_f"]; ?>(g)</p>
			<p>炭水化物(糖質):<?php echo $row["c_max_c"]; ?>(g)</p>
		</div>
		<script src="js/app.js"></script>
	</body>
</html>
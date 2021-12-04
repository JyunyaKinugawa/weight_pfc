<?php
require_once("./controller/session_check.php");
require_once("./controller/config.php");
$sql = "SELECT * FROM weights WHERE u_name=:u_name";
$stmt =$pdo->prepare($sql);
$stmt->bindValue(":u_name",$_SESSION["u_name"],PDO::PARAM_STR);
$stmt->execute();
$row =$stmt->fetch(PDO::FETCH_ASSOC);

$sql2 = "SELECT * FROM c_weight WHERE u_name=:u_name";
$stmt2 =$pdo->prepare($sql2);
$stmt2->bindValue(":u_name",$_SESSION["u_name"],PDO::PARAM_STR);
$stmt2->execute();
$row2 =$stmt2->fetch(PDO::FETCH_ASSOC);

if(!empty($row)){
	$html = "<h1>脂質制限の必要カロリー数</h1>
				<h2>".$_SESSION["u_name"]."さんが脂質制限ダイエットを成功させるのに必要な栄養素</h2>
				<p>摂取可能カロリー(/日)".$row["max_cal"]."(kcal)</p>
				<p>タンパク質:".$row["max_p"]."(g)</p>
				<p>脂質:".$row["max_f"]."(g)</p>
				<p>炭水化物(糖質):".$row["max_c"]."(g)</p>";
}else{
	$html = "";
}
if(!empty($row2)){
	//書き換え
	$html2 = "<h1>糖質制限の必要カロリー数</h1>
				<h2>".$_SESSION["u_name"]."さんが糖質制限ダイエットを成功させるのに必要な栄養素</h2>
				<p>摂取可能カロリー(/日)".$row2["c_max_cal"]."(kcal)</p>
				<p>タンパク質:".$row2["c_max_p"]."(g)</p>
				<p>脂質:".$row2["c_max_f"]."(g)</p>
				<p>炭水化物(糖質):".$row2["c_max_c"]."(g)</p>";
}else{
	$html2="";
}/*elseif(!empty($row) && !empty($row2)){
	$html = "<h1>脂質制限の必要カロリー数</h1>
		<h2>".$_SESSION["u_name"]."さんが脂質制限ダイエットを成功させるのに必要な栄養素</h2>
		<p>摂取可能カロリー(/日)".$row["max_cal"]."(kcal)</p>
		<p>タンパク質:".$row["max_p"]."(g)</p>
		<p>脂質:".$row["max_f"]."(g)</p>
		<p>炭水化物(糖質):".$row["max_c"]."(g)</p>

		<h1>糖質制限の必要カロリー数</h1>
		<h2>".$_SESSION["u_name"]."さんが糖質制限ダイエットを成功させるのに必要な栄養素</h2>
		<p>摂取可能カロリー(/日)".$row2["c_max_cal"]."(kcal)</p>
		<p>タンパク質:".$row2["c_max_p"]."(g)</p>
		<p>脂質:".$row2["c_max_f"]."(g)</p>
		<p>炭水化物(糖質):".$row2["c_max_c"]."(g)</p>";

}*/

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>ダイエット法</title>
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width">
	</head>
	<body>
		<div id="container">
			<h1>ダイエット法</h1>
			<p><?php echo $_SESSION["u_name"]; ?>さんの行いたいダイエット法を以下から選択してください。</p>
			<h2><a href="fat_cut_diet.php"><input type="button" name="protein" value="脂質制限"></a></h2>
			<h2><a href="carbo_cut_diet.php"><input type="button" name="carbo" value="糖質制限"></a></h2>
		</div>
		<?php echo $html; ?>
		<?php echo $html2; ?>
		<!-- 追加　-->
	</body>
</html>
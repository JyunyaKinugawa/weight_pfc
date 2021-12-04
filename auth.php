<?php
session_start();
//材料の確認
if(empty($_POST["token"])||empty($_POST["pass"])||empty($_SESSION["token"])){
	header("Location:login.php?err=1");
	exit();
}
//材料の確認
if($_SESSION["token"] != $_POST["token"]){
	header("Location:login.php?err=2");
	exit();
}

require_once("./controller/config.php");
$sql = "SELECT * FROM users WHERE u_name=:u_name";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":u_name",$_POST["u_name"],PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($row["pass"])){
	$flag = password_verify($_POST["pass"],$row["pass"]);
}else{
	$flag = false;
}
if($flag){
	//セッションハイジャック対策
	session_regenerate_id();//セッションの生成をもう一度、セッションの固定化を防ぐ
	$_SESSION["login"] = true;
	$_SESSION["u_name"] = htmlspecialchars($row["u_name"],ENT_QUOTES);
	header("Location:diet_method.php");
	exit();
}else{
	//認証失敗の場合
	$_SESSION = [];
	header("Location:login.php?err=3");
	exit();
}
?>
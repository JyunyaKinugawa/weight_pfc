<?php
require_once("./controller/session_check.php");
require_once("./controller/config.php");
if(!empty($_POST["f_weight"])){
//脂質制限---------------------------
	define('WEIGHT', round($_POST["f_weight"]));
	//-----カロリー計算-------
	$max_cal = round(intval(WEIGHT*37-500));
	$max_p = round(intval(WEIGHT*2.5));
	$max_f = round(intval($max_cal*0.1 / 9));
	$max_c = round(intval(($max_cal - $max_p*4 - $max_f*9)/4));
	//--------------------
	$sql = "INSERT INTO weights(weight,max_cal,max_p,max_f,max_c,u_name) VALUES(:weight,:max_cal,:max_p,:max_f,:max_c,:u_name)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindvalue(":weight",WEIGHT,PDO::PARAM_INT);
	$stmt->bindvalue(":max_cal",$max_cal,PDO::PARAM_INT);
	$stmt->bindvalue(":max_p",$max_p,PDO::PARAM_INT);
	$stmt->bindvalue(":max_f",$max_f,PDO::PARAM_INT);
	$stmt->bindvalue(":max_c",$max_c,PDO::PARAM_INT);
	$stmt->bindvalue(":u_name",$_SESSION["u_name"],PDO::PARAM_STR);
	$stmt->execute();
	header("Location:result.php?ok=1");
//------------------------------------------------
}elseif(!empty($_POST["c_weight"])){
//糖質制限------------------------------------
	define('WEIGHT', round($_POST["c_weight"]));
	//-----カロリー計算-------
	$max_cal = round(intval(WEIGHT*37-500));
	$max_p = round(intval($max_cal*0.3/4));
	$max_f = round(intval($max_cal*0.6/ 9));
	$max_c = round(intval(($max_cal - $max_p*4 - $max_f*9)/4));
	//--------------------
	$sql = "INSERT INTO c_weight(c_weight,c_max_cal,c_max_p,c_max_f,c_max_c,u_name) VALUES(:c_weight, :c_max_cal, :c_max_p, :c_max_f, :c_max_c,:u_name)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindvalue(":c_weight",WEIGHT,PDO::PARAM_INT);
	$stmt->bindvalue(":c_max_cal",$max_cal,PDO::PARAM_INT);
	$stmt->bindvalue(":c_max_p",$max_p,PDO::PARAM_INT);
	$stmt->bindvalue(":c_max_f",$max_f,PDO::PARAM_INT);
	$stmt->bindvalue(":c_max_c",$max_c,PDO::PARAM_INT);
	$stmt->bindvalue(":u_name",$_SESSION["u_name"],PDO::PARAM_STR);
	$stmt->execute();
	header("Location:result2.php?ok=2");
}

?>

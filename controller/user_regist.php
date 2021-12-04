<?php
require_once("config.php"); 
$u_name = $_POST["u_name"];
$sql2 = "SELECT * FROM users WHERE u_name=:u_name";
$stmt2 = $pdo->prepare($sql2);
$stmt2->bindvalue(":u_name",$u_name,PDO::PARAM_STR);
$stmt2->execute();
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

if(!$row2){
    $sql = "INSERT INTO users(u_name,pass) VALUES(:u_name,:pass)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue(":u_name",$_POST["u_name"],PDO::PARAM_STR);
    $stmt->bindvalue(":pass",password_hash($_POST["pass"], PASSWORD_DEFAULT),PDO::PARAM_STR);
    $stmt->execute();
    header("Location:../login.php");
    exit();
}else{
    header("Location:../user_form.php?err=1");
    exit();
}
?>
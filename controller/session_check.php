<?php
session_start();
if(empty($_SESSION["login"])){
	header("Location:../login.php?err=1");
	exit();
}
?>
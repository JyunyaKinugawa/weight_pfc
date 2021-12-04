<?php
$host = "mysql1.php.xdomain.ne.jp";
$dbname = "xd438457_diet";
$dbuser = "xd438457_root";
$dbpass = "heisei70617";
$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";
$pdo = new PDO($dsn,$dbuser,$dbpass);
?>
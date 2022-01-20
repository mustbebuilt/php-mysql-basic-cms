<?php
//require("../../includes/pdoConn.inc.php");
$dsn = 'mysql:host=localhost;dbname=cmsmjc_db1';
$user = 'cmsmjc';
$password = 'tT3logI';
try { 
$pdo = new PDO($dsn, $user, $password); 
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$pdo ->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) { 
echo 'Connection failed again: ' . $e->getMessage();
}
?>
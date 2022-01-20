<?php
$dsn = 'mysql:host=localhost;dbname=b9999999_db1';
$user = 'b9999999';
$password = 'YOURPASSWORD';
try {
$pdo = new PDO($dsn, $user, $password);
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo ->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
echo 'Connection failed again: ' . $e->getMessage();
}
?>
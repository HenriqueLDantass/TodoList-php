<?php
$db_name = "test";
$db_user = "root";
$local = "localhost";

$pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $local, $db_user);

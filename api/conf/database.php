<?php

$host = "127.0.0.1";
$dbname = "lost_found";
$port = 3306;
$user = "root";
$password = "root";

$dsn = "mysql:host=$host;dbname=$dbname;port=$port";

$pdo = new PDO($dsn, $user, $password);
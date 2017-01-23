<?php

// Database Credentials
$servername = "127.0.0.1";
$username = "modern";
$password = "@DminModern";
$dbname = "modern_theme";
$charset = 'utf8';

$dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $username, $password, $opt);
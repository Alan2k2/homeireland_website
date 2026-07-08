<?php
$host = '127.0.0.1';
$port = '3307';
$user = 'root';
$pass = 'NewServer@2026';

try {
    $pdo = new PDO("mysql:host=$host;port=$port", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("DROP DATABASE IF EXISTS u642877865_Home");
    $pdo->exec("CREATE DATABASE u642877865_Home");
    echo "Database created successfully\n";
    
    $pdo->exec("USE u642877865_Home");
    $pdo->exec("SET SESSION sql_mode = ''");
    $sql = file_get_contents(__DIR__ . '/u642877865_Home.sql');
    if ($sql === false) {
        die("Could not read SQL file.");
    }
    
    // Remove DEFAULT from TEXT/BLOB columns
    $sql = preg_replace('/(\b(?:TEXT|BLOB|JSON|GEOMETRY)\b(?:[\s\w]*?))DEFAULT\s+(?:NULL|\'[^\']*\'|"[^"]*"|-?\d+)/i', '$1', $sql);
    
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    $pdo->exec($sql);
    echo "SQL imported successfully\n";
} catch (Exception $e) {
    die("ERROR: " . $e->getMessage());
}

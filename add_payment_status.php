<?php
$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=u642877865_Home', 'root', 'NewServer@2026');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "ALTER TABLE Adverisement ADD COLUMN payment_status TINYINT(1) NOT NULL DEFAULT 1;";
try {
    $pdo->exec($sql);
    echo "Column payment_status added successfully.\n";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

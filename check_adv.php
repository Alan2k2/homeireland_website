<?php
$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=u642877865_Home', 'root', 'NewServer@2026');
$stmt = $pdo->query('DESCRIBE Adverisement');
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

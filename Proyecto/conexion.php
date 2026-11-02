<?php
$host = 'localhost';
$dbname = 'callcenter_db'; // El nombre de la base de datos que creaste
$username = 'root';        // Usuario por defecto en XAMPP
$password = '';            // XAMPP no tiene contraseña por defecto

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
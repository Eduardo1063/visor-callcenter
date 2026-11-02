<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];

    $sql = "UPDATE PACIENTE SET documento = ?, nombre = ?, apellido = ?, telefono = ?, ciudad = ? WHERE ID_paciente = ?";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$documento, $nombre, $apellido, $telefono, $ciudad, $id])) {
        header("Location: pacientes.php");
        exit();
    } else {
        echo "Error al actualizar el registro.";
    }
}
?>
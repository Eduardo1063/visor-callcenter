<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    
    // Valores por defecto para campos obligatorios según tu modelo lógico
    $tipo_doc = 'CC'; 
    $fecha_nacimiento = '1990-01-01'; 
    $sexo = 'M';

    $sql = "INSERT INTO PACIENTE (documento, nombre, apellido, telefono, ciudad, tipo_doc, fecha_nacimiento, sexo) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$documento, $nombre, $apellido, $telefono, $ciudad, $tipo_doc, $fecha_nacimiento, $sexo])) {
        header("Location: pacientes.php");
        exit();
    } else {
        echo "Error al guardar el registro.";
    }
}
?>
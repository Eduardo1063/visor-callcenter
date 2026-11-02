<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM PACIENTE WHERE ID_paciente = ?";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$id])) {
        header("Location: pacientes.php");
        exit();
    } else {
        echo "Error al eliminar el registro.";
    }
}
?>
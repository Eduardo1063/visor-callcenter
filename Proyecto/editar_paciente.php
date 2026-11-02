<?php
include 'conexion.php';

if (!isset($_GET['id'])) {
    header("Location: pacientes.php");
    exit();
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM PACIENTE WHERE ID_paciente = ?");
$stmt->execute([$id]);
$paciente = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$paciente) {
    echo "Paciente no encontrado.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow" style="max-width: 600px; margin: 0 auto;">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0"><i class="fa-solid fa-pen"></i> Editar Paciente</h4>
            </div>
            <div class="card-body">
                <form action="actualizar_paciente.php" method="POST">
                    <!-- Campo oculto con el ID del paciente -->
                    <input type="hidden" name="id" value="<?php echo $paciente['ID_paciente']; ?>">
                    
                    <div class="mb-3">
                        <label>Documento</label>
                        <input type="text" name="documento" class="form-control" value="<?php echo $paciente['documento']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $paciente['nombre']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Apellido</label>
                        <input type="text" name="apellido" class="form-control" value="<?php echo $paciente['apellido']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" value="<?php echo $paciente['telefono']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" value="<?php echo $paciente['ciudad']; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" value="<?php echo $paciente['fecha_nacimiento']; ?>">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="pacientes.php" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
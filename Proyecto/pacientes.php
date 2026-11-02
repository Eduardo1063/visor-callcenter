<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pacientes - Visor Call Center</title>
<!-- Bootstrap Local -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Local -->
    <link href="css/all.min.css" rel="stylesheet">
    <style>
        .sidebar { height: 100vh; background-color: #003366; color: white; padding-top: 20px; }
        .sidebar a { color: #cfd8dc; text-decoration: none; padding: 15px; display: block; }
        .sidebar a:hover, .sidebar a.active { background-color: #00509e; color: white; border-left: 4px solid #00c853; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 sidebar">
                <h4 class="text-center mb-4"><i class="fa-solid fa-hospital"></i> Hospital Mayor</h4>
                <a href="dashboard.php"><i class="fa-solid fa-chart-pie me-2"></i> Dashboard</a>
                <a href="llamadas.php"><i class="fa-solid fa-phone me-2"></i> Registro CDR (FreePBX)</a>
                <a href="pacientes.php" class="active"><i class="fa-solid fa-users me-2"></i> Pacientes</a>
                <a href="reportes.php"><i class="fa-solid fa-file-lines me-2"></i> Reportes</a>
            </nav>
            
            <main class="col-md-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Gestión de Pacientes (CRUD)</h2>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevo"><i class="fa-solid fa-plus"></i> Nuevo Paciente</button>
                </div>
                <div class="card">
                    <div class="card-body">
                       <table class="table table-bordered">
    <thead class="table-primary">
        <tr>
            <th>Documento</th>
            <th>Nombre Completo</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
			<th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Consultar los pacientes en la base de datos
        $stmt = $pdo->query("SELECT * FROM PACIENTE");
        
        // El ciclo while recorre cada paciente encontrado
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['documento'] . "</td>";
            echo "<td>" . $row['nombre'] . " " . $row['apellido'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['ciudad'] . "</td>";
            
            // Columna de acciones con los botones de Editar y Eliminar
            echo "<td>
                    <a href='editar_paciente.php?id=" . $row['ID_paciente'] . "' class='btn btn-sm btn-warning'><i class='fa-solid fa-pen'></i></a>
                    <a href='eliminar_paciente.php?id=" . $row['ID_paciente'] . "' class='btn btn-sm btn-danger' onclick=\"return confirm('¿Estás seguro de eliminar este paciente?');\"><i class='fa-solid fa-trash'></i></a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
                    </div>
                </div>
            </main>
        </div>
    </div>
	<!-- Modal Nuevo Paciente -->
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="guardar_paciente.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title">Registrar Nuevo Paciente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Documento</label>
            <input type="text" name="documento" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Ciudad</label>
            <input type="text" name="ciudad" class="form-control">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Importar JS de Bootstrap para que el modal funcione -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportes - Visor Call Center</title>
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
                <a href="pacientes.php"><i class="fa-solid fa-users me-2"></i> Pacientes</a>
                <a href="reportes.php" class="active"><i class="fa-solid fa-file-lines me-2"></i> Reportes</a>
            </nav>
            
            <main class="col-md-10 p-4">
                <h2 class="mb-4">Generación de Reportes</h2>
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Fecha Inicio</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Fecha Fin</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <button type="button" class="btn btn-primary w-100"><i class="fa-solid fa-magnifying-glass"></i> Generar Reporte</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="alert alert-secondary text-center">
                    <i class="fa-solid fa-chart-bar fa-2x mb-2"></i><br>
                    Seleccione un rango de fechas para visualizar el reporte estadístico de llamadas, citas y quejas.
                </div>
            </main>
        </div>
    </div>
</body>
</html>
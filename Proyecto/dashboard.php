<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Visor Call Center</title>
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
            <!-- Menú Lateral -->
            <nav class="col-md-2 sidebar">
                <h4 class="text-center mb-4"><i class="fa-solid fa-hospital"></i> Hospital Mayor</h4>
                <a href="dashboard.php" class="active"><i class="fa-solid fa-chart-pie me-2"></i> Dashboard</a>
                <a href="llamadas.php"><i class="fa-solid fa-phone me-2"></i> Registro CDR (FreePBX)</a>
                <a href="pacientes.php"><i class="fa-solid fa-users me-2"></i> Pacientes</a>
                <a href="reportes.php"><i class="fa-solid fa-file-lines me-2"></i> Reportes</a>
            </nav>
            
            <!-- Contenido Principal -->
            <main class="col-md-10 p-4 bg-light">
                <h2 class="mb-4">Panel de Control General</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa-solid fa-phone-volume"></i> Llamadas Hoy</h5>
                                <h2>1,245</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa-solid fa-headset"></i> Agentes Activos</h5>
                                <h2>12</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa-solid fa-phone-slash"></i> Llamadas Perdidas</h5>
                                <h2>34</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-info mt-3">
                    <i class="fa-solid fa-circle-info"></i> Sistema preparado para conexión JDBC/PDO con base de datos Asterisk CDR.
                </div>
            </main>
        </div>
    </div>
</body>
</html>
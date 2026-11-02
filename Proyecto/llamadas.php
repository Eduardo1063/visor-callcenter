<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CDR FreePBX - Visor Call Center</title>
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
                <a href="llamadas.php" class="active"><i class="fa-solid fa-phone me-2"></i> Registro CDR (FreePBX)</a>
                <a href="pacientes.php"><i class="fa-solid fa-users me-2"></i> Pacientes</a>
                <a href="reportes.php"><i class="fa-solid fa-file-lines me-2"></i> Reportes</a>
            </nav>
            
            <main class="col-md-10 p-4">
                <h2 class="mb-4">Historial de Llamadas (CDR)</h2>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Fecha (calldate)</th>
                                    <th>Origen (src)</th>
                                    <th>Destino (dst)</th>
                                    <th>Duración (duration)</th>
                                    <th>Estado (disposition)</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Estos datos luego vendrán de SELECT * FROM asteriskcdrdb.cdr -->
                                <tr>
                                    <td>2026-10-25 09:30:12</td>
                                    <td>3105551234</td>
                                    <td>6001 (Citas)</td>
                                    <td>125 seg</td>
                                    <td><span class="badge bg-success">Respondida</span></td>
                                    <td><button class="btn btn-sm btn-info text-white">Ver Detalle</button></td>
                                </tr>
                                <tr>
                                    <td>2026-10-25 09:35:45</td>
                                    <td>3204449876</td>
                                    <td>6002 (Soporte)</td>
                                    <td>0 seg</td>
                                    <td><span class="badge bg-danger">No Respondida</span></td>
                                    <td><button class="btn btn-sm btn-info text-white">Ver Detalle</button></td>
                                </tr>
								<tr>
                                    <td>2026-10-25 09:40:12</td>
                                    <td>3118551234</td>
                                    <td>6004 (SIAU)</td>
                                    <td>155 seg</td>
                                    <td><span class="badge bg-success">Respondida</span></td>
                                    <td><button class="btn btn-sm btn-info text-white">Ver Detalle</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
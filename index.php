<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VIAJE USA</title>
    <link rel="icon" type="image/png" href="usa.png">
</head>
<body>

 <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                USA Trip
                <i class="fa-brands fa-php fa-xl"></i>
            </a>
            <button class="navbar-toggler" data-bs-toggle= "collapse" data-bs-targer="menu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
</nav>
    <div class="container mt-3 col-md-3">
        <h2 class="text-center">Registro de Gastos</h2>
        <form action="index.php" method="GET">
            <label class="form-label" for="nombre">Gastos:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Gastos" required><br>
            <label for="telefono">Monto:</label>
            <input type="moneda" class="form-control" id="correo" name="correo" placeholder="Monto" required><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <div class="container mt-3 table-responsive">
        <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>GASTOS</th>
                            <th>BASE</th>
                            <th>IVA (21%)</th>
                            <th>MONTO</th>
                        </tr>
                    </thead>
            <tr>
                   <td class="wrap d-inline-flex gap-1 botones justify-content-center">
            <?php

    ?>
                    </tbody>
                </table>
            </div>
    <?php
    ?>
</body>
</html>
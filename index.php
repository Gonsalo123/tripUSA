<?php
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VIAJE USA</title>
    <link rel="icon" type="image/png" href="usa.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <form action="procesar.php" method="POST">
            <label class="form-label" for="nombre">Gastos:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Gastos" required><br>
            <label for="moneda">Monto:</label>
            <input type="moneda" class="form-control" id="monto" name="monto" placeholder="Monto" required><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
<!-- GOSALO -->
</body>
</html>
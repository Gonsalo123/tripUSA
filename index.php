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
        <form action="index.php" method="POST">
            <label class="form-label" for="nombre">Gastos:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Gastos" required><br>
            <label for="moneda">Monto:</label>
            <input type="moneda" class="form-control" id="monto" name="monto" placeholder="Monto" required><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

 <?php

        $query = "SELECT * FROM contactos";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
    ?>
            <div class="container mt-3 table-responsive">
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>GASTOS</th>
                            <th>BASE</th>
                            <th>IVA (21%)</th>
                            <th>MONTO</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
                $counter = '';
                while ($row = $result->fetch_assoc()) {
                    $counter++;
    ?>
                        <tr>
                            <td class="wrap"><?php echo $counter; ?></td>
                            <td class="wrap"><?php echo $row['gasto']; ?></td>
                            <td class="wrap"><?php echo $row['monto']; ?></td>
                            <td class="wrap d-inline-flex gap-1 botones justify-content-center"></td>



                        </tr>
    <?php
                }
    ?>
                    </tbody>
                </table>
            </div>
    <?php
        }
        else {
    ?>


<!--
            <div class="container mt-3">
                <img src="banner.jpg" class="img-fluid" alt="No Data">
            </div> -->
    <?php
        }
        $conn->close();
    ?>


</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VIAJE USA</title>
    <link rel='icon' type="image/png" href="usa.png">
</head>
<body>

 <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                USA Trip
                <i class="fa-brands fa-php fa-xl"></i>
            </a>
        </div>
</nav>
    <div class="container mt-3 col-md-3">
        <h2 class="text-center">Registro de Gastos</h2>
        <form action="procesar.php" method="POST">
            <label class="form-label" for="nombre">Gastos:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Gastos" required><br>
            <label for="telefono">Monto:</label>

            <input type="email" class="form-control" id="correo" name="correo" placeholder="Monto" required><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <div class="container mt-3 table-responsive">
        <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>TELÉFONO</th>
                            <th>CORREO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="wrap"><?php echo $counter; ?></td>
                            <td class="wrap"><?php echo $row['nombre']; ?></td>
                            <td class="wrap"><?php echo $row['telefono']; ?></td>
                            <td class="wrap"><?php echo $row['correo']; ?></td>
                            <td class="wrap d-inline-flex gap-1 botones justify-content-center">
                                <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">Editar <i class='fa-solid fa-user-pen'></i></a>

                                <form action="procesar.php" method="POST">
                                    <input type="hidden" id="accion" name="accion" value="borrar">
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                    <button class="btn btn-sm btn-danger">Eliminar <i class='fa-solid fa-user-xmark'></i></button>
                                </form>
                            </td>
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

            <div class="container col-md-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">No hay Datos</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Bo se han enc...</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <img src="banner.jpg" class="img-fluid" alt="No Data">
            </div>
    <?php
        }
        $conn->close();
    ?>

    <!-- <footer class="text-center text-white mt-5">
        <div class="bg-primary p-3">
            Copyright - Carlos Ochoa 2025 -
            <a class="text-white" href="#">https://ochoa.es</a>
        </div>
    </footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
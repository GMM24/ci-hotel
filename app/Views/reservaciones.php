<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Reservaciones</title>
</head>
<body class="bg-primary-subtle">
    <div class="container">
    <h1>Reservaciones</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url ('/');?>"><i class="bi bi-house-fill"></i> Inicio</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Reservaciones
                </a>
                <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url ('ver_cliente');?>"><i class="bi bi-people-fill"></i> Clientes</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url ('ver_hotel');?>"><i class="bi bi-building-fill"></i> Hoteles</a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url ('ver_reservacion');?>"><i class="bi bi-calendar-event-fill "></i> Reservaciones</a></li>
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <table class="table">
        <thead>
            <a href="nueva_reservacion" class="btn btn-outline-dark m-2"><i class="bi bi-calendar-plus-fill"></i> Nueva Reservación </a>
            <tr>
                <th>Id de Reservación</th>
                <th>Fecha</th>
                <th>Id de Cliente</th>
                <th>Id de Hotel</th>
                <th>Descripción</th>
                <th>Id de Usuario</th>
                <th class="text-center">Acciones:</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $reservaciones):
            ?>
            <tr>
                <td><?php echo $reservaciones['reservacion_id'];?></td>
                <td><?php echo $reservaciones['fecha'];?></td>
                <td><?php echo $reservaciones['cliente_id'];?></td>
                <td><?php echo $reservaciones['hotel_id'];?></td>
                <td><?php echo $reservaciones['descripcion'];?></td>
                <td><?php echo $reservaciones['usuario_id'];?></td>

                <td><a href="<?= base_url('buscar_reservacion/').$reservaciones['reservacion_id']?>"class="btn btn-outline-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                <td><a href="<?= base_url('eliminar_reservacion/').$reservaciones['reservacion_id']?>"class= "btn btn-outline-danger"><i class="bi bi-calendar2-x-fill"></i> Eliminar</a></td>
        
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
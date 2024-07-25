<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hoteles</title>
</head>

<body>
    <div class="container">
        <h1>Hoteles</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url ('/');?>">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Hoteles
                </a>
                <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url ('ver_cliente');?>"><i class="bi bi-people-fill"></i> Clientes</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url ('ver_hotel');?>"><i class="bi bi-building-fill"></i> Hoteles</a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url ('ver_reservacion');?>"><i class="bi bi-calendar2-week-fill"></i> Reservaciones</a></li>
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <table class="table">
            <thead>
                <a href="nuevo_hotel" class="btn btn-outline-dark m-2"><i class="bi bi-building-fill-add"></i> Nuevo Hotel</a>
                <tr>
                    <th>Id de Hotel</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Id de Ciudad</th>
                    <th>Id de Categoria</th>
                    <th>Id de Usuario</th>
                

                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($datos as $hoteles):
            ?>
                <tr>
                    <td><?php echo $hoteles['hotel_id'];?></td>
                    <td><?php echo $hoteles['nombre'];?></td>
                    <td><?php echo $hoteles['correoelectronico']?></td>
                    <td><?php echo $hoteles['telefono'];?></td>
                    <td><?php echo $hoteles['direccion'];?></td>
                    <td><?php echo $hoteles['ciudad_id'];?></td>
                    <td><?php echo $hoteles['categoria_id'];?></td>
                    <td><?php echo $hoteles['usuario_id'];?></td>

                    <td><a href="<?=base_url('buscar_hotel/').$hoteles['hotel_id']?>"class="btn btn-outline-warning"><i class="bi bi-pencil-fill"></i>Editar</a></td>
                    <td><a href="<?=base_url('eliminar_hotel/').$hoteles['hotel_id']?>"class= "btn btn-outline-danger"><i class="bi bi-person-x-fill"></i>Eliminar</a></td>

                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
</body>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
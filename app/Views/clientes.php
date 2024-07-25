<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clientes</title>
</head>

<body>
    <div class="container">
    <h1>Clientes</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url ('/');?>">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Hoteles
                </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_cliente');?>">Clientes</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_hotel');?>">Hoteles</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_reservacion');?>">Reservaciones</a></li>
                  </ul>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
        <table class="table">
            <thead>
                <a href="nuevo_cliente">Nuevo Cliente</a>
                <tr>
                    <th>Id de Cliente</th>
                    <th>Nombre y Apellido</th>
                    <th>Nit</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                 foreach($datos as $clientes):
                ?>
                <tr>
                    <td><?php echo $clientes['cliente_id'];?></td>
                    <td><?php echo $clientes['nombre'].", ". $clientes['apellido'];?></td>
                    <td><?php echo $clientes['nit'];?></td>
                    <td><?php echo $clientes['telefono'];?></td>
                    <td><?php echo $clientes['correo_electronico'];?></td>
                    <td><?php echo $clientes['direccion'];?></td>

                    <td><a href="<?= base_url('buscar_cliente/').$clientes['cliente_id']?>"></a></td>
                    <td><a href="<?= base_url('eliminar_cliente/').$clientes['cliente_id']?>"></a></td>

                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva Reservación</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">
    <div class="container">
        <h1>Editar Reservación</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url ('ver_reservacion');?>"><i class="bi bi-calendar2-week-fill"></i> Reservaciones</a>                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
        <form action="<?=base_url('modificar_reservacion')?>" method="post">
            <div class="mb-3">
                <label for="txtIdReservacion" class="form-label">Id de la Reservación</label>
                <input type="number" class="form-control" id="txtIdReservacion" name="txtIdReservacion"
                    placeholder="Ingrese Id de la reservacion" value="<?=$datos['reservacion_id'];?>">
            </div>
            <div class="mb-3">
                <label for="txtFecha" class="form-label">Fecha </label>
                <input type="date" class="form-control" id="txtFecha" name="txtFecha" value="<?=$datos['fecha'];?>">
            </div>
            <div class="mb-3">
                <label for="txtCliente" class="form-label">Id de Cliente</label>
                <input type="number" class="form-control" id="txtCliente" name="txtCliente" placeholder="Ingrese el Id del cliente"  value="<?=$datos['cliente_id'];?>">
            </div>
            <div class="mb-3">
                <label for="txtIdHotel" class="form-label">Id del Hotel</label>
                <input type="number" class="form-control" id="txtIdHotel" name="txtIdHotel" placeholder="Ingrese el id edl hotel"  value="<?=$datos['hotel_id'];?>">
            </div>
            <div class="mb-3">
                <label for="txtDescripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion"
                    placeholder="Ingrese el teléfono del Hotel" value="<?=$datos['descripcion'];?>">
            </div>
            <div class="mb-3">
                <label for="txtIdUsuario" class="form-label">Id de Usuario</label>
                <select class="form-select form-select-sm" aria-label="Small select example" id="txtIdUsuario" name="txtIdUsuario" value="<?=$datos['usuario_id'];?>">
                    <option selected>Selecione Nombre de la ciudad</option>
                    <option value="2">Soyla Recepcionista</option>
                    <option value="5">Juan Perez</option>
                    <option value="100">Juan Alvarez</option>
                    <option value="200">Maria Batz </option>
                    <option value="300">Martha Flores</option>
                    <option value="301">Daniel Urizar</option>
                    <option value="777">Soyel Administrador</option>
                    <option value="888">Soyel Recepcionista</option>
                   
                </select>
            </div>
            <button type="submit" class="btn btn-success" id="btnGuardar" name="btnGuardar"><i class="bi bi-calendar-check-fill"></i> Guardar</button>
        </form>



    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
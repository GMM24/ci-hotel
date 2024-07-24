<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <div class="container">
    <h1>Nuevo Cliente</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url ('/');?>">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hoteles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url ('ver_cliente');?>">Clientes</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url ('ver_hotel');?>">Hoteles</a></li>
                            <li><a class="dropdown-item"
                                    href="<?php echo base_url ('ver_reservacion');?>">Reservaciones</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <form action="agregar_cliente" method="post">
        <div class="mb-3">
            <label for="txtIdCliente" class="form-label">Id de Cliente</label>
            <input type="number" class="form-control" id="txtIdCliente" name="txtIdCliente" placeholder="Ingrese DPI">
        </div>
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese Apellido">
        </div>
        <div class="mb-3">
            <label for="txtApellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Nombre">
        </div>
        <div class="mb-3">
            <label for="txtNit" class="form-label">Nit</label>
            <input type="text" class="form-control" id="txtNit" name="txtNit"
                placeholder="Ingrese su DIrección">
        </div>
        <div class="mb-3">
            <label for="txtTelefono" class="form-label">Teléfono</label>
            <input type="number" class="form-control" id="txtTelefono" name="txtTelefono"
                placeholder="Ingrese su Numero de telefono">
        </div>
        <div class="mb-3">
            <label for="txtCorreo" class="form-label">Correo Electrónico</label>
            <input type="number" class="form-control" id="txtCorreo" name="txtCorreo"
                placeholder="Ingrese Número de telefono">
        </div>
        <div class="mb-3">
            <label for="txtDireccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="txtDireccion" name="txtDireccion"
                placeholder="Ingrese su correo electronico">
        </div>

        <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Enviar</button>
    </form>
</div>
</body>
</html>



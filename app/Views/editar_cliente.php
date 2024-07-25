<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  </head>
  <body>
    <div class="container">
        <h1>Editar Clientes</h1>
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
                  Clientes
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
        <form action="<?=base_url('modificar_cliente')?>" method="post">
            <div class="mb-3">
                <label for="txtIdCliente" class="form-label">Id de Cliente</label>
                 <input type="number" class="form-control" id="txtIdCliente" name="txtIdCliente" placeholder="Ingrese Codigo de Departamento" value="<?=$datos['cliente_id'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre </label>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese Nombre del Departamento" value="<?=$datos['nombre'];?>">
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                 <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese la region (1 al 8) para el Departamento" value="<?=$datos['apellido'];?>">
            </div>
            <div class="mb-3">
                <label for="txtNit" class="form-label">Nit</label>
                 <input type="number" class="form-control" id="txtNit" name="txtNit" placeholder="Ingrese la region (1 al 8) para el Departamento" value="<?=$datos['nit'];?>">
            </div>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Teléfono</label>
                 <input type="number" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese la region (1 al 8) para el Departamento" value="<?=$datos['telefono'];?>">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electrónico</label>
                 <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese la region (1 al 8) para el Departamento" value="<?=$datos['correo_electronico'];?>">
            </div>
            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Dirección</label>
                 <input type="number" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Ingrese la region (1 al 8) para el Departamento" value="<?=$datos['direccion'];?>">
            </div>
            <button type="submit" class="btn btn-success" id="btnGuardar" name="btnGuardar"><i class="bi bi-person-check-fill"></i> Guardar cambios</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
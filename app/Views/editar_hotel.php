<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  </head>
  <body class="bg-primary-subtle">
    <div class="container">
        <h1>Editar Hotel</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url ('ver_hotel');?>"><i class="bi bi-buildings-fill"></i>Hoteles</a>
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
        <form action="<?=base_url('modificar_hotel')?>" method="post">
            <div class="mb-3">
                <label for="txtIdHotel" class="form-label">Id del Hotel</label>
                 <input type="number" class="form-control" id="txtIdHotel" name="txtIdHotel" placeholder="Ingrese el Id del Hotel" value="<?=$datos['hotel_id'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre </label>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese el Nombre de hotel" value="<?=$datos['nombre'];?>">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electrónico</label>
                 <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese el correo electronico del hotel" value="<?=$datos['correoelectronico'];?>">
            </div>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Teléfono</label>
                 <input type="number" class="form-control" id="txtTelefono" name="txtTelefono" placeholder="Ingrese no. de telefono del hotel" value="<?=$datos['telefono'];?>">
            </div>
            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Dirección</label>
                 <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Ingrese la direccion de hotel" value="<?=$datos['direccion'];?>">
            </div>
            <div class="mb-3">
                <label for="txtCiudad" class="form-label">Id de Ciudad</label>
                 <input type="number" class="form-control" id="txtCiudad" name="txtCiudad" placeholder="Ingrese el id de la ciudad del hotel " value="<?=$datos['ciudad_id'];?>">
            </div>
            <div class="mb-3">
                <label for="txtIdCategoria" class="form-label">Id de Categoria </label>
                 <input type="number" class="form-control" id="txtIdCategoria" name="txtIdCategoria" placeholder="Ingrese el Id del tipo de categoria del hotel" value="<?=$datos['categoria_id'];?>">
            </div>
            <div class="mb-3">
                <label for="txtIdUsuario" class="form-label">Id de Usuario</label>
                 <input type="number" class="form-control" id="txtIdUsuario" name="txtIdUsuario" placeholder="Ingrese el id del usuario" value="<?=$datos['usuario_id'];?>">

            </div>
            <button type="submit" class="btn btn-success" id="btnGuardar" name="btnGuardar"><i class="bi bi-building-fill-check"></i> Guardar cambios</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
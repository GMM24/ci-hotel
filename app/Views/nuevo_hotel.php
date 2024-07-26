<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">
    <div class="container">
        <h1>Nuevo Hotel</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url ('ver_hotel');?>"><i class="bi bi-buildings-fill"></i> Hoteles</a>                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
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
        <form action="<?=base_url('agregar_hotel')?>" method="post">
            <div class="mb-3">
                <label for="txtIdHotel" class="form-label">Id del Hotel</label>
                <input type="number" class="form-control" id="txtIdHotel" name="txtIdHotel"
                    placeholder="Ingrese Id del Hotel">
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre </label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                    placeholder="Ingrese Nombre del Hotel">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electrónico</label>
                <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese el correo electronico del hotel" >
            </div>
            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="txtTelefono" name="txtTelefono"
                    placeholder="Ingrese el teléfono del Hotel">
            </div>
            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="txtDireccion" name="txtDireccion"
                    placeholder="Ingrese la direccion del hotel">
            </div>
            <div class="mb-3">
                <label for="txtCiudad" class="form-label">Id de Ciudad</label>
                <select class="form-select form-select-sm" aria-label="Small select example" id="txtCiudad" name="txtCiudad">
                    <option selected>Selecione Nombre de la ciudad</option>
                    <option value="1">Guatemala</option>
                    <option value="2">Retahuleu</option>
                    <option value="4">Acapulco</option>
                    <option value="5">Cancún</option>
                    <option value="7">Cartagena</option>
                    <option value="8">Bogota</option>
                    <option value="11">Cartago</option>
                    <option value="13">Rio de Janeiro</option>
                    <option value="14">Sao Paulo</option>
                    <option value="16">Cusco</option>
                    <option value="17">Limar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtIdCategoria" class="form-label">Id de Categoria </label>
                    <select class="form-select form-select-sm" aria-label="Small select example" id="txtIdCategoria" name="txtIdCategoria">
                    <option selected>Selecione la categoria del hotel</option>
                    <option value="101">1 </option>
                    <option value="102">2 </option>
                    <option value="103">3</option>
                    <option value="104">4</option>
                    <option value="105">5</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtIdUsuario" class="form-label">Id de Usiario</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" id="txtIdUsuario" name="txtIdUsuario">
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
            <button type="submit" class="btn btn-success" id="btnGuardar" name="btnGuardar"><i class="bi bi-building-fill-check"></i> Guardar</button>
        </form>



    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
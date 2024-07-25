<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table         = 'ciudadanos';
    protected $primaryKey = 'clientes_id';
    protected $allowedFields =[
        'clientes_id',
        'nombre',
        'apellido',
        'nit',
        'telefono',
        'correo_electronico',
        'direccion',
    ];
}
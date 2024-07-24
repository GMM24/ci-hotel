<?php
namespace App\Controllers;
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string 
    {
        return view ('cliente_nuevo');
    }
    public function nuevoCliente()
}
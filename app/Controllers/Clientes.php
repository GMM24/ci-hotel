<?php
namespace App\Controllers;
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string 
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->findAll();

        return view ('clientes',$datos);
    }
    public function nuevoCliente(): string
    {
        return view ('cliente_nuevo');
    }
    public function agregarCliente()
    {
        $datos=[
            'cliente_id'=>$this->request->getVar('txtIdCliente'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nit'=>$this->request->getVar('txtNit'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'direccion'=>$this->request->getVar('txtDireccion')

        ];
        $clientes = new ClientesModel();
        $clientes->insert($datos);

        return redirect()->route('ver_clientes');
    }
}
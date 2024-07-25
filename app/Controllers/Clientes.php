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
        return view ('nuevo_cliente');
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

        return redirect()->route('ver_cliente');
    }
    public function eliminarCliente($cliente_id=null)
    {
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$cliente_id]);
        return redirect()->route('ver_cliente');
    }
    public function buscarCliente($id=null)
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();

        return view('editar_cliente',$datos);
    }
    public function modificarCliente()
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
        $clientes->update($datos['cliente_id'],$datos);
        return redirect()->route('ver_cliente');
    }
}
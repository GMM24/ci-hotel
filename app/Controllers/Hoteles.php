<?php
namespace App\Controllers;
use App\Models\HotelModel;

class Hoteles extends BaseController
{
    
    public function index():string 
    {
        $hoteles = new HotelModel();
        $datos['datos']=$hoteles->findAll();

        return view ('hoteles',$datos);
    }
    public function nuevoHotel():string
    {
        return view('nuevo_hotel');
    }
    public function agregarHotel()
    {
        $datos=[
            'hotel_id'=>$this->request->getVar('txtIdHotel'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudad'),
            'categoria_id'=>$this->request->getVar('txtIdCategoria'),
            'usuario_id'=>$this->request->getVar('txtIdUsuario')
        ];
        $hoteles = new HotelModel();
        $hoteles->insert($datos);

        return redirect()->route('ver_hotel');
    }
    public function eliminarHotel($hotel_id=null)
    {
        $hoteles = new HotelModel();
        $hoteles->delete(['hotel_id'=>$hotel_id]);
        return redirect()->route('ver_hotel');
    }
    public function buscarHotel($id=null)
    {
        $hoteles = new HotelModel();
        $datos['datos']=$hoteles->where('hotel_id',$id)->first();

        return view('editar_hotel',$datos);
    }
    public function modificarHotel()
    {
        $datos=[
            'hotel_id'=>$this->request->getVar('txtIdHotel'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudad'),
            'categoria_id'=>$this->request->getVar('txtIdCategoria'),
            'usuario_id'=>$this->request->getVar('txtIdUsuario')
        ];
        
        $hoteles = new HotelModel();
        $hoteles->update($datos['hotel_id'],$datos);
        return redirect()->route('ver_hotel');
    }

}
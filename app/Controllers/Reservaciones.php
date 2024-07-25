<?php
namespace App\Controllers;
use App\Models\ReservacionModel;

class Reservaciones extends BaseController
{
    
    public function index():string 
    {
        $reservaciones = new ReservacionModel();
        $datos['datos']=$reservaciones->findAll();

        return view ('reservaciones',$datos);
    }
    public function nuevaReservacion():string
    {
        return view('nueva_reservacion');
    }
    public function agregarReservacion()
    {
        $datos=[
            'reservacion_id'=>$this->request->getVar(''),
            'fecha'=>$this->request->getVar(''),
            'cliente_id'=>$this->request->getVar(''),
            'hotel_id'=>$this->request->getVar(''),
            'descripcion'=>$this->request->getVar(''),
            'usuario_id'=>$this->request->getVar(''),
        ];
        $reservaciones = new HotelModel();
        $reservaciones->insert($datos);

        return redirect()->route('ver_hotel');
    }
    public function eliminarHotel($hotel_id=null)
    {
        $reservaciones = new HotelModel();
        $reservaciones->delete(['hotel_id'=>$hotel_id]);
        return redirect()->route('ver_hotel');
    }
    public function buscarHotel($id=null)
    {
        $reservaciones = new HotelModel();
        $datos['datos']=$reservaciones->where('hotel_id',$id)->first();

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
        
        $reservaciones = new HotelModel();
        $reservaciones->update($datos['hotel_id'],$datos);
        return redirect()->route('ver_hotel');
    }

}
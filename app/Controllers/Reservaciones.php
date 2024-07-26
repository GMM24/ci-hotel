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
            'reservacion_id'=>$this->request->getVar('txtIdReservacion'),
            'fecha'=>$this->request->getVar('txtFecha'),
            'cliente_id'=>$this->request->getVar('txtCliente'),
            'hotel_id'=>$this->request->getVar('txtIdHotel'),
            'descripcion'=>$this->request->getVar('txtDescripcion'),
            'usuario_id'=>$this->request->getVar('txtIdUsuario')
        ];
        $reservaciones = new ReservacionModel();
        $reservaciones->insert($datos);

        return redirect()->route('ver_reservacion');
    }
    public function eliminarReservacion($reservacion_id=null)
    {
        $reservaciones = new ReservacionModel();
        $reservaciones->delete(['reservacion_id'=>$reservacion_id]);
        return redirect()->route('ver_reservacion');
    }
    public function buscarReservacion($id=null)
    {
        $reservaciones = new ReservacionModel();
        $datos['datos']=$reservaciones->where('reservacion_id',$id)->first();

        return view('editar_reservacion',$datos);
    }
    public function modificarReservacion()
    {
        $datos=[
            'reservacion_id'=>$this->request->getVar('txtIdReservacion'),
            'fecha'=>$this->request->getVar('txtFecha'),
            'cliente_id'=>$this->request->getVar('txtCliente'),
            'hotel_id'=>$this->request->getVar('txtIdHotel'),
            'descripcion'=>$this->request->getVar('txtDescripcion'),
            'usuario_id'=>$this->request->getVar('txtIdUsuario')
        ];

        $reservaciones = new ReservacionModel();
        $reservaciones->update($datos['reservacion_id'],$datos);
        return redirect()->route('ver_reservacion');
    }

}
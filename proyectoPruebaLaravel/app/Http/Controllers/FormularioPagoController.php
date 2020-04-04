<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiDatosController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Client;

class FormularioPagoController extends Controller
{
   
    
    public function formulario(){
       

       return view('formulariopago');
    }
    public function GuardarDatos(Request $request){
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $adulto = $request->input('adulto');
        $boys = $request->input('boys');
        $fecha = $request->input('fecha');
        $tarjeta = $request->input('tarjeta');
        $mExpiracion = $request->input('fechaExp1');
        $yExpiracion = $request->input('fechaExp2');
        $cvv = $request->input('cvv');
        $fechaExp = $mExpiracion.$yExpiracion;
        $numR1 = str_split($nombre, 3);
        $numR2 = str_split($apellido, 3);
        $numR3 = rand(5, 15);
        $numReservacion = $numR1[0].$numR3.$numR2[0];
        $insertarDb = DB::table('clientes')->insert(array('Nombre'=>$nombre,'Apellido'=>$apellido,'CantidadAdulto' => $adulto,'CantidadBoy'=>  $boys,'FechaCreacion'=>$fecha,'NumTarjeta'=>$tarjeta,'FechaExp'=>$fechaExp,'Cvv'=>$cvv, 'NumReservacion' =>$numReservacion));
        $array = ['nombre'=>$nombre, 'apellido'=>$apellido, 'numReservacion'=>$numReservacion];

        return view('agradecimiento',['nombre'=>$nombre, 'apellido'=>$apellido, 'numReservacion'=>$numReservacion]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiDatosController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Client;

class CrudVentaController extends Controller
{
   
    
    public function principal(){
       

       return view('crudventa');
    }
}
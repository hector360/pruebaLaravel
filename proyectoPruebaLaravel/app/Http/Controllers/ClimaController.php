<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiDatosController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Client;

class ClimaController extends Controller
{
   
    
    public function mostrarClima(){
       date_default_timezone_set("Asia/Kolkata");
       $apiKey = "83710916d118be6be803f173dd5e0770";
       $cityId = "3531673";
       $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=".$cityId."&lang=es&units=metric&APPID=".$apiKey;
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_HEADER, 0);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
       curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
       curl_setopt($ch, CURLOPT_VERBOSE, 0);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       $response = curl_exec($ch);
       curl_close($ch);
       $data = json_decode($response);
       $currenTime = time();

       return view('clima', ['data' => $data]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        // Sin paginación
        // $datos = City::all();
        // return view("home",["datos"=>$datos]);
        
        // Con paginación
        $datos = City::paginate(20);
        return view("City/ciudades",compact('datos'));
    }

    public function cityId($id){
        $dato = City::find($id);
        return view("City/ciudadId",["dato"=>$dato]);
    }
}

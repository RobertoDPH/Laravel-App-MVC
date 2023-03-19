<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        // Sin paginación
        // $datos = City::all();
        // return view("home",["datos"=>$datos]);
        
        // Con paginación
        $datos = Country::paginate(20);
        return view("Country/paises",compact('datos'));
    }

    public function countryId($code){
        $dato = Country::where('Code',$code)->first();
        return view("Country/paisId",["dato"=>$dato]);
    }
}

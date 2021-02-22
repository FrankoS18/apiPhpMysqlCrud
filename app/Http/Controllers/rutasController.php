<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rutasController extends Controller
{
    public function index(){
        //aqui se hace la conexion
        return view('welcome');
    }
}

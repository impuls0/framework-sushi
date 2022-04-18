<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller


{
    public function index(){ //se define un metodo para el index
        //dd('hola mundo'); //lo que hace dd es lanzar un mensaje y detener lo ejecutado, significa dump and die
        return view('home.index');
    }    

    public function viewdos(){
        return view('home.index2');
    }

    public function contacto(){
        return view('home.formulario');
    }
}

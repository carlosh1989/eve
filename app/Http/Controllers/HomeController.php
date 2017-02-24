<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('formulario');
    }

    public function store()
    {
        extract($_POST);
        $persona = new Person(); 
        $persona->nombre = $nombre;
        $persona->cedula = $cedula;
        $persona->save();

        echo "guardado";
    }
}

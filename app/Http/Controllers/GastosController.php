<?php

namespace App\Http\Controllers;

use App\Models\Gastos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GastosController extends Controller
{

    private $class;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->class = new Gastos();
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/gastos/gastos');
    }

    //Función que guarda un nuevo gasto
    public function crear( Request $request ){ 
        
        $data   = $request->all();
        $ret    = $this->class->guardar( $data[ 'datos' ] );

        return $ret;
        
    }

    //Función que carga todos los gastos guardados
    public function cargar () {

        $gastos = DB::table( 'gastos' )->get();
        return $gastos;

    }
}

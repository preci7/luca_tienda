<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    use HasFactory;

    protected $fillable = [
        'gasto',
        'estado'
    ];

    public function guardar ( $data ){
    	
		$gasto          = new Gastos();
        $gasto->gasto   = $data[ 'gasto' ];
        $gasto->estado  = $data[ 'estado' ];
        $gasto->save();
        
        return $gasto;

    }

    public function cargar (){
    	
		$gasto          = new Gastos();
        $gasto->gasto   = $data[ 'gasto' ];
        $gasto->estado  = $data[ 'estado' ];
        $gasto->save();
        
        return $gasto;

    }
}

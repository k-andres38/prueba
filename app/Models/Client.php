<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Credit;

class Client extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nombre',
    //     'telefono',
    //     'contacto',
    // ];
    protected $table = 'client';
   
    protected $fillable = [
        'nombres',
        'apellidos',
        'nit_cc', 
        'direccion',
        'telefono',
        'ciudad',
        'contacto',
        'cupo_total',
        'dias_gracia',
        'cupo_disponible',
        'fecha_credito',
        'estado',

    ];
    // protected $table = [
    //     'nombre',
    //     'apellidos',
    //     'contacto',

    // ];
    // protected $fillable = [
    //     'nombre',
    //     'telefono',
    //     'contacto',
    // ];


    public function client(){
        return  $this->belongsTo('App\Models\Client');
      }
   
}

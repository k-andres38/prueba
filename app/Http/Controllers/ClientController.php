<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Credit;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{


    public function show(Client $client){
        $cliente1=Client::all();
       
       
        return view('clientes',compact('cliente1'));
    }

    public function showSearch(Request $request){
    

        if (preg_match('/[A-Za-z]/', $request->info)) {
            $cliente1 = DB::table('client')->where('nombres','=', $request->info)->get();
            return view('clientes',compact('cliente1')); 
        } else {
          // Si la consulta no contiene letras y números, se ejecuta este bloque de código
          $cliente1 = DB::table('client')->where('nit_cc','=', $request->info)->get();
          return view('clientes',compact('cliente1')); 
        }


    }

   
    

    //

    // public function indexAction(){
    //     $client=Client::all();
    //    // return $client;
    // }

    public function create(Request $request){
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'nit_cc' => 'required|numeric',
            'direccion' => 'required',
            'telefono' => 'required|numeric',
            'ciudad' => 'required',
            
            'contacto' => 'required',
            
            'cupo_total' => 'required|numeric',
            'dias_gracia' => 'required|numeric',
            'cupo_disponible' => 'required|numeric',
            
            
        ]);
       

        $client=Client::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'nit_cc' => $request->nit_cc,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'ciudad' => $request->ciudad,
            'contacto' => $request->contacto,
            'cupo_total' => $request->cupo_total,
            'dias_gracia' => $request->dias_gracia,
            'cupo_disponible' => $request->cupo_disponible,
            
        ]);
        return redirect()->route('home');

    }

    public function edit( $id){
        $client=Client::find($id);
        
        return view('editar-cliente',compact('client'));
    }

    public function destroy(Client $client ){
        $client->delete();
        return redirect()->route('clientes.show');
    }

    public function credit($cli){
        
    }
}

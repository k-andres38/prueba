@extends('layouts.plantilla')

@section('title','Inicio')

@section('content')

<main class="flex">
    
<aside class="bg-white rounded-[15px] text-center">
    <article class="content-between h-full">
    <div class="w-48 p-10 mt-10"><img src="{!!asset('imagenes/admin.png')!!}">
    <h4 class="text-center p-1">Admin</h4>
        </div class='mb-20 '>
        
        <div class="mb-2 pl-2 text-left"><i class="fa-solid fa-house"></i><a class="p-1" href="{{route('home')}}">Inicio</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-regular fa-user-tie"></i></i><a class="p-1" href="{{route('clientes.show')}}">Clientes</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-regular fa-coins"></i><a class="p-1" href="{{route('credit.crear')}}">Créditos</a></div>

        <button  class=" mb-6 rounded-lg bg-violet-600 text-white h-9 p-1 w-36 " style="margin-top: 35vh;">Cerrar Sesion</button>
    </article>
    

</aside >
<section class="w-full ml-20   " >
        <h2 class="text-center  bg-white text-2xl p-2 rounded-[15px] text-violet-600 font-bold">Clientes</h2>
       
            <article class="grid place-items-center bg-white p-5 mt-5 rounded">
            <section class="w-full">
                <main class="flex justify-between mt-1 items-center w-full  ">
                <form method="GET" action="">
                    <div class="border place-items-center p-1 bg-white rounded">
                    <input type="text" name="info" placeholder="Nombre NIT o CC" class="pl-2 outline-none " >
                    <button><i class="fa-solid fa-magnifying-glass bg-sky-200 p-1 rounded" style="color:#7dd3fc"></i></button>
                    </div>
                    
                    
                </form>
            
                <div><a class="p-2 mb-6 rounded bg-violet-600 text-white text-center h-9 p-1 w-36 " href="{{route('crear.cliente')}}">Crear Cliente</a></div>
                </div>
            </main>
            <table class="table-auto  mt-10 text-center w-full text-sm font-normal border-spacing-x-28">
                <thead class=" bg-violet-600 text-white rounded-lg h-10">
                    <tr >
                        <th class="rounded-l p-2">Nombres</th>
                        <th class="p-2">Apellido</th>
                        <th class="p-2">NIT/CC</th>
                    
                        <th class="p-2">Direccion</th>
                        <th class="p-2">Ciudad</th>
                        <th class="p-2">Telefono</th>
                        <th class="p-2">Cupo Disponible</th>
                        
                        <th class="p-2 " colspan='2'>Acciones</th>
                        <th class="p-2"></th>
                        <th class="rounded-r p-2"></th>
                    </tr>
                </thead>
                <tbody class="border-separate  ">
                    @foreach($cliente1 as $c)
                        <tr >
                            <td class="p-2" >{{$c->nombres}}</td>
                            <td class="p-2" >{{$c->apellidos}}</td>
                            <td class="p-2" >{{$c->nit_cc}}</td>
                            <td class="p-2" >{{$c->ciudad}}</td>
                            <td  class="p-2">{{$c->direccion}}</td>
                            <td class="p-2" >{{$c->telefono}}</td>
                            <td  class="p-2">{{$c->cupo_disponible}}</td>

                            <td> <a href="{{route('clientes.edit',$c->id)}}"><i class="fa-sharp fa-solid fa-user-pen"></i></a></td>
                        
                            <td>
                           
                               
                                <form method="POST" action="{{ route('clientes.destroy', $c->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                           
                          
                            @endforeach
                </tbody>
                
            </table>
            </article>

        </section>
     

      


    </section>
    
</main>


@endsection
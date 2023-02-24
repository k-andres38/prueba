@extends('layouts.plantilla')

@section('title','Inicio')

@section('content')

<main class="flex">
    
<aside class="bg-white rounded-[15px] text-center">
    <article class="content-between h-full">
    <div class="w-48 p-10 mt-10"><img src="{!!asset('imagenes/admin.png')!!}">
    <h4 class="text-center p-1">Admin</h4>
        </div class='mb-20 '>
        
        <div class="mb-2 pl-2 text-left"><i class="fa-solid fa-house"></i><a class="p-1" href="">Inicio</a></div>
        <div class="mb-2 pl-2 text-left"> <i class="fa-solid fa-user"></i><a class="p-1" href="{{route('clientes.show')}}">Clientes</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-sharp fa-solid fa-sack-dollar"></i></i><a class="p-1" href="{{route('credit.crear')}}">Créditos</a></div>
       

        <button  class=" mb-6 rounded-lg bg-violet-600 text-white h-9 p-1 w-36 " style="margin-top: 35vh;">Cerrar Sesion</button>
    </article>
    

</aside >
<section class="w-full ml-20 " >
        <h2 class="text-center ml-6 bg-white text-2xl p-2 rounded-[15px] text-violet-600 font-bold">Inicio</h2>
        <div class="flex items-start justify-center">
        <div class="mt-6  flex justify-center  items-start ">
            <div class="ml-6 bg-white w-48 pl-4 pt-2 pb-2 flex justify-between  rounded-lg shadow-lg  shadow-slate-400/50">
                <div class="">
                    <p class="text-center">Credito</p>
                    <p class="text-centertext-sky-600 font-bold text-lg" style="color:#3b82f6">31</p>
                </div>
                <div class="flex text-center items-center  w-10">
                    <i class="fa-brands fa-cc-visa" style="color: #0ea5e9"></i>
                </div>
            </div>
            <div class="ml-20 bg-white justify-center items-center text-center p-2 rounded-lg  shadow-lg  shadow-slate-400/50 w-56  grid gap-2 ">

        
            <p>Numero de cliente</p>
            <p style="color:#3b82f6" class=" f-1 font-bold text-lg">{{$count}}</p>
            <i class="fa-solid fa-user  " style="color: #0ea5e9"></i>
            </div>
        
        </div>


    </section>

</main>


@endsection
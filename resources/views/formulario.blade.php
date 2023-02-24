@extends('layouts.plantilla')

@section('title','Formulario')

@section('content')

    

    <main class="flex">
    
    <aside class="bg-white rounded-[15px] text-center">
    <article class="content-between h-full">
    <div class="w-48 p-10 mt-10"><img src="{!!asset('imagenes/admin.png')!!}">
    <h4 class="text-center p-1">Admin</h4>
        </div class='mb-20 '>
        
        <div class="mb-2 pl-2 text-left"><i class="fa-solid fa-house"></i><a class="p-1" href="{{route('home')}}">Inicio</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-regular fa-user-tie"></i></i><a class="p-1" href="{{route('cliente')}}">Clientes</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-regular fa-coins"></i><a class="p-1" href="">Créditos</a></div>

        <button  class=" mb-6 rounded-lg bg-violet-600 text-white h-9 p-1 w-36 " style="margin-top: 35vh;">Cerrar Sesion</button>
    </article>
    

</aside >
<section class="w-full ml-20 " >

<h2 class="text-center ml-6 bg-white text-2xl p-2 rounded-[15px] text-violet-600 font-bold">Nuevo Cliente</h2>
   
    <article class="grid place-items-center ">
        <form method="POST" action="/guardar" class="rounded-[15px] mt-10 bg-white p-5 ">
            @csrf
            <label>Número de pagaré:
            <input type="text" name="n_pagare">
            </label>
           

            <label>Monto del crédito:
            <input type="text" name="monto_credito">
            </label>
            

            <label>Cuota inicial:
            <input type="text" name="cuota_inicial">
            </label>
           

            <label>Tasa de interés:
            <input type="text" name="tasa_interes">
            </label>
           

            <label>Cuotas mensuales:
            <input type="text" name="cuotas_mensuales">
            </label>
           

            <label>Fecha de desembolso:
            <input type="date" name="fecha_desembolso">
            </label>
            

            <label>Fecha del crédito:
            <input type="date" name="fecha_credito">
            </label>
           

            <label>Observaciones:
            <textarea name="observaciones"></textarea>
            </label>
           <br>

            <button type="submit">Guardar</button>
        </form>

    </article>
        
    
       


    </section>

</main>
@endsection
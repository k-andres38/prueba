@extends('layouts.plantilla')

@section('title','Formulario')

@section('content')

    

    <main class="flex">
    
    @include('layouts.aside')
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
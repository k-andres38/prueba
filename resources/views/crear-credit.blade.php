@extends('layouts.plantilla')

@section('title','Credito')

@section('content')

    

    <main class="flex">
    
    @include('layouts.aside')
<section class="w-full ml-20  " >

<h2 class="text-center ml-6 bg-white text-2xl p-2 rounded-[15px] text-violet-600 font-bold">Nuevo Crédito</h2>
   
    <article class="flex  flex-col mt-20 text-left  w-98">
        
           <div class="w-98 m-auto ">
          
           <form method="POST" action="{{route('client.create')}}" class="rounded-[15px] m-auto  pb-5 pl-5 grid gap-8 border-l bg-white    ">
                @csrf
                
                <div class="col-span-2 p-0 pr-5 text center grid place-items-center" >
                        <div class="grid grid-cols-2 mt-4 gap-x-4 auto-rows-auto">
                        <label for="n_pagare" >Pagaré Nro.: <br>
                            <input type="number" name="n_pagare"  class="border rounded w-full" required placeholder="Número de pagaré">
                        </label>
                    

                        <label for="cuotas_mensuales">Cuotas Mensuales <br>
                            <input type="number" name="cuotas_mensuales"  class="border rounded w-full" required placeholder="Cuotas">
                        </label>
                    

                        <label for="monto_credito">Monto del crédito <br>
                            <input type="number" name="monto_credito"  class="border rounded w-full" required placeholder="Cantidad">
                        </label>

                        <label for="cedula"> Cédula del cliente <br>
                        <form method="GET" action="" class=" flex flex-nowrap">
                    
                            <input type="number" name="info" placeholder="Cédula" class="pl-2 outline-none border rounded " >
                            <button><i class="fa-solid fa-magnifying-glass bg-sky-200 p-1 rounded " style="color:#7dd3fc"></i></button>
                            
                        </form>

                        </label>
                        

                        <label for="cuota_inicial">Cuota Inicial <br>
                            <input type="number" name="cuota_inicial"  class="border rounded w-full" required placeholder="Cantidad">
                        </label>
                        
                        

                        <label  for="cliente">Cliente <br>
                            <select name="cliente"  class="border rounded w-full">
                            <option value="">Seleccionar...</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            </select>
                        </label>
                        

                        

                        <label for="tasa_interes">Tasa de interés <br>
                            <input type="number" name="tasa_interes"  class="border rounded w-full" required placeholder="Teléffono">
                        </label>
                        

                        <label for="fecha_credito">Fecha del crédito <br>
                            <input type="date" name="fecha_credito"  class="border rounded w-full" required placeholder="Contacto">
                        </label>
                        <label for="fecha_desembolso">Fecha de desembolso <br>
                            <input type="date" name="fecha_desembolso"  class="border rounded w-full" required placeholder="Contacto">
                        </label>

                        <label for="observaciones">
                            Observaciones <br>
                           <textarea name="observaciones" id="observaciones" cols="30" rows="4" class="border rounded" placeholder="Observaciones"></textarea>
                        </label>
                    
                        </div>
                        <button type="submit" class=" mt-6 mb-1 rounded-lg bg-violet-600 text-white h-9 p-1 w-20 ">Crear</button>
                       
                        
                </div>
                 

                
            
            </form>
           </div>

    </article>
        
    
       


    </section>

</main>
@endsection
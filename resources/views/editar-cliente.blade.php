@extends('layouts.plantilla')

@section('title','Formulario')

@section('content')

    

    <main class="flex">
    
    @include('layouts.aside')
<section class="w-full ml-20  " >

<h2 class="text-center ml-6 bg-white text-2xl p-2 rounded-[15px] text-violet-600 font-bold">Detalles Cliente</h2>
   
    <article class="flex  flex-col mt-20 text-left  w-98">
        
           <div class="w-98 m-auto ">
           <h2 class="font-semibold " >Datos Personales</h2>
           <form method="POST" action="{{route('client.create')}}" class="rounded-[15px] m-auto  pb-5 pl-5 flex border-l bg-white grid grid-cols-3   ">
                @csrf
                
                <div class="col-span-2 p-0" >
                        <div class="grid grid-cols-2 mt-4 gap-x-4 auto-rows-auto">
                        <label for="nombres" >Nombres: <br>
                            <input type="text" name="nombres" value="{{$client->nombres}}"  class="border rounded" placeholder="Nombres">
                        </label>
                    

                        <label for="apellidos">Apellidos: <br>
                            <input type="text" name="apellidos" value="{{$client->apellidos}}"  class="border rounded" placeholder="Apellidos">
                        </label>
                    

                        <label for="nit_cc">Nit/CC: <br>
                            <input type="text" name="nit_cc" value="{{$client->nit_cc}}" class="border rounded" placeholder="NIT/CC">
                        </label>

                        <label for="direccion">Dirección: <br>
                            <input type="text" name="direccion" value="{{$client->direccion}}"  class="border rounded" placeholder="Direción">
                        </label>
                        
                        

                        <label  for="ciudad">Ciudad: <br>
                            <select name="ciudad" id="ciudad" class="border rounded">
                            <option selected> {{$client->ciudad}} </option>
                            <option value="Cartagena">Cartagena</option>
                            <option value="Sincelejo">Sincelejo</option>
                            <option value="Barranquilla">Barranquilla</option>
                            <option value="Santa Marta">Santa Marta</option>
                            </select>
                        </label>
                        

                        

                        <label for="telefono">Teléfono: <br>
                            <input type="text" name="telefono" value="{{$client->telefono}}" class="border rounded" placeholder="Teléffono">
                        </label>
                        

                        <label for="contacto">Contacto: <br>
                            <input type="text" name="contacto" value="{{$client->contacto}}"  class="border rounded" placeholder="Contacto">
                        </label>
                    
                        </div>
                        <button type="submit" class=" mb-6 mt-5 rounded-lg bg-violet-600 text-white h-9 p-1 w-36 ">Guardar Cambios</button>
                        
                </div>

                <div class="grid grid-cols-1 border-l p-4 bg-white p-0 ">
                    <label for="cupo_total" class=" mt-0">Cupo total:</label>
                        <input type="text" name="cupo_total" class="border" value="{{$client->cupo_total}}" placeholder="Cupo Total">
                        <label for="cupo_disponible">Cupo disponible:</label>
                        <input type="text" name="cupo_disponible" value="{{$client->cupo_disponible}}"  class="border" placeholder="Cupo Disponible">

                        <label for="dias_gracia">Días de gracia:</label>
                        <input type="text" name="dias_gracia"  value="{{$client->dias_gracia}}" class="border" placeholder="Dias de gracia">

                    
                </div>
            
            </form>
           </div>

    </article>
        
    
       


    </section>

</main>
@endsection
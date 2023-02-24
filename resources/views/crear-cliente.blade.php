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
        <div class="mb-2 pl-2 text-left"><i class="fa-regular fa-user-tie"></i></i><a class="p-1" href="{{route('clientes.show')}}">Clientes</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-regular fa-coins"></i><a class="p-1" href="">Créditos</a></div>

        <button  class=" mb-6 rounded-lg bg-violet-600 text-white h-9 p-1 w-36 " style="margin-top: 35vh;">Cerrar Sesion</button>
    </article>
    

</aside >
<section class="w-full ml-20  " >

<h2 class="text-center ml-6 bg-white text-2xl p-2 rounded-[15px] text-violet-600 font-bold">Nuevo Cliente</h2>
   
    <article class="flex  flex-col mt-20 text-left  w-98">
        
           <div class="w-98 m-auto ">
           <h2 class="font-semibold " >Datos Personales</h2>
           <form method="POST" action="{{route('client.create')}}" class="rounded-[15px] m-auto  pb-5 pl-5 flex border-l bg-white grid grid-cols-3   ">
                @csrf
                
                <div class="col-span-2 p-0" >
                        <div class="grid grid-cols-2 mt-4 gap-x-4 auto-rows-auto">
                        <label for="nombres" >Nombres: <br>
                            <input type="text" name="nombres"  class="border rounded" required placeholder="Nombres">
                        </label>
                    

                        <label for="apellidos">Apellidos: <br>
                            <input type="text" name="apellidos"  class="border rounded" required placeholder="Apellidos">
                        </label>
                    

                        <label for="nit_cc">Nit/CC: <br>
                            <input type="text" name="nit_cc"  class="border rounded" required placeholder="NIT/CC">
                        </label>

                        <label for="direccion">Dirección: <br>
                            <input type="text" name="direccion"  class="border rounded" required placeholder="Direción">
                        </label>
                        
                        

                        <label  for="ciudad">Ciudad: <br>
                            <select name="ciudad" id="ciudad" class="border rounded">
                            <option value="">Seleccionar...</option>
                            <option value="Cartagena">Cartagena</option>
                            <option value="Sincelejo">Sincelejo</option>
                            <option value="Barranquilla">Barranquilla</option>
                            <option value="Santa Marta">Santa Marta</option>
                            </select>
                        </label>
                        

                        

                        <label for="telefono">Teléfono: <br>
                            <input type="text" name="telefono"  class="border rounded" required placeholder="Teléffono">
                        </label>
                        

                        <label for="contacto">Contacto: <br>
                            <input type="text" name="contacto"  class="border rounded" required placeholder="Contacto">
                        </label>
                    
                        </div>
                        <button type="submit" class=" mb-6 mt-5 rounded-lg bg-violet-600 text-white h-9 p-1 w-36 ">Guardar Cambios</button>
                        
                </div>

                <div class="grid grid-cols-1 border-l p-4 bg-white p-0 ">
                    <label for="cupo_total" class=" mt-0">Cupo total:</label>
                        <input type="number" name="cupo_total" class="border" required placeholder="Cupo Total">
                        <label for="cupo_disponible">Cupo disponible:</label>
                        <input type="number" name="cupo_disponible"  class="border" required placeholder="Cupo Disponible">

                        <label for="dias_gracia">Días de gracia:</label>
                        <input type="number" name="dias_gracia"  class="border" required placeholder="Dias de gracia">

                    
                </div>
            
            </form>
           </div>

    </article>
        
    
       


    </section>

</main>
@endsection
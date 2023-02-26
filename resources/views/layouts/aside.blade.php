


<aside class="bg-white rounded-[15px] text-center">
    <article class="content-between h-full">
    <div class="w-48 p-10 mt-10"><img src="{!!asset('imagenes/admin.png')!!}">
    <h4 class="text-center p-1">Admin</h4>
        </div class='mb-20 '>
        
        <div class="mb-2 pl-2 text-left"><i class="fa-solid fa-house"></i><a class="p-1" href="{{route('home')}}">Inicio</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-solid fa-user"></i><a class="p-1" href="{{route('clientes.show')}}">Clientes</a></div>
        <div class="mb-2 pl-2 text-left"><i class="fa-sharp fa-solid fa-coins"></i><a class="p-1" href="{{route('credit.crear')}}">Créditos</a></div>

        <button  class=" mb-6 rounded-lg bg-violet-600 text-white h-9 p-1 w-36 " style="margin-top: 35vh;">Cerrar Sesion</button>
    </article>
    

</aside >

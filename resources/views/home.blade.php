@extends('layouts.plantilla')

@section('title','Inicio')

@section('content')

<main class="flex">
    
@include('layouts.aside')
<section class="w-full ml-20 " >
        <h2 class="text-center ml-6 bg-white text-2xl p-2 rounded-[15px] text-violet-600 font-bold">Inicio</h2>
        <div class="flex items-start justify-center">
        <div class="mt-6  flex justify-center  items-start ">
            <div class="ml-6 bg-white w-48 pl-4 pt-2 pb-2 flex justify-between  rounded-lg shadow-lg  shadow-slate-400/50">
                <div class="">
                    <p class="text-center">Créditos</p>
                    <p class="text-centertext-sky-600 font-bold text-lg" style="color:#3b82f6">31</p>
                </div>
                <div class="flex text-center items-center  w-10">
                <i class="fa-solid fa-credit-card" style="color: #0ea5e9;font-size:22px"></i>
                    
                </div>
            </div>
            <div class="ml-20 bg-white justify-center items-center text-center p-2 rounded-lg  shadow-lg  shadow-slate-400/50 w-56  grid gap-2 ">

        
            <p>Número de cliente</p>
            <p style="color:#3b82f6" class=" f-1 font-bold text-lg">{{$count}}</p>
            <i class="fa-solid fa-user  " style="color: #0ea5e9;font-size:26px"></i>
            </div>
        
        </div>


    </section>

</main>


@endsection
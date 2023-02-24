<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $count=DB::table('client')->count();
       
        return view('home',compact('count'));
    }


   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditController extends Controller
{
    //

    public function create(Request $request){
        return view('crear-credit');
    }
}
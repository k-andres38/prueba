<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;


    public function client(){
       // $client=Credit::where('credit_id',$this->id)->first();

        return $this->hasOne(Credit::class);
    }
}

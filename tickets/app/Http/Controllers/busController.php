<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class busController extends Controller
{
    public function showBuses(){
        $bus=DB::select('select * from busses');
        return view('busses',['bus'=>$bus]);
    }
}

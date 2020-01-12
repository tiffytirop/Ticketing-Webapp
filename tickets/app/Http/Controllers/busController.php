<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class busController extends Controller
{
    public function showBuses(){
        $bus=DB::select('select * from busses');
        return view('busses',['bus'=>$bus]);
    }
    public function showBusById($id){
       
        $bus = DB::table('busses')->where('numberPlate', $id)->get();
        return view('busMaster',['bus'=>$bus]);
     }
}

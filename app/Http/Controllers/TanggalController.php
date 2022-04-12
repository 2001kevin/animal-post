<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tanggal;

class TanggalController extends Controller
{
    public function tanggal(){
        return view('nyobatime');
    }
    public function storetanggal(Request $request){
        
        tanggal::create([
            'tanggal'=>$request->tanggal
        ]);
            return redirect('/');
    }
}

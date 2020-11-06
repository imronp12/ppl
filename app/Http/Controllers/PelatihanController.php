<?php

namespace App\Http\Controllers;

use App\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelatihanController extends Controller
{
    public function pelatihan()
    {
        $pelatihan = DB::table('pelatihan')->get();
        return view('dinaspertanian.pelatihan',['pelatihan' => $pelatihan]);
    }

    public function create(Request $request)
    {
        Pelatihan::create($request->all());
        return redirect('/dinaspertanian.pelatihan');
    }
    
}
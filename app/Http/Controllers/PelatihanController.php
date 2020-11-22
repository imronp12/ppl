<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelatihanController extends Controller

{
    public function index()
    {
        $data_pelatihan = \App\Pelatihan::all();
        return view('dinaspertanian/pelatihan',['data_pelatihan'=> $data_pelatihan]);
    }

    public function create(Request $request)
    {
        \App\Pelatihan::create($request->all());
        return redirect('dinaspertanian/pelatihan');
    }
    
    public function edit($id)
    {
        $pelatihan = \App\Pelatihan::find($id);
        return view('dinaspertanian/editpelatihan',['pelatihan' => $pelatihan]);
    }

    public function update(Request $request,$id)
    {
        $pelatihan = \App\Pelatihan::find($id);
        $pelatihan->update($request->all());
        return redirect('dinaspertanian/pelatihan');
    }
}

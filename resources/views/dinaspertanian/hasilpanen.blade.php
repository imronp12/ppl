@extends('layouts.app')

@section('title','hasilpanen')

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nama Petani</th>
            <th scope="col">Jenis</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Luas Lahan</th>
        </tr>
    </thead>
            <tbody>
            <tr>
                <td>Nama</td>
                <td>Jenis panen</td>
                <td>Jumlah panen</td>
                <td>Luas lahan pertanian</td>
            </tr>
            </tbody>
</table>

@endsection
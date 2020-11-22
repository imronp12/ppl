@extends('layouts.app')

@section('title','bantuan')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col-7">Pengajuan Bantuan</th>
            <th scope="col-7">Keterangan</th>
            <th scope=""></th>
        </tr>
    </thead>
            <tbody>
            <tr>
                <td>Bantuan yang diajukan</td>
                <td>deskripsi mengenai bantuan</td>
                <td>
                    <a href="" class="badge badge-success">Terima</a>
                    <a href="" class="badge badge-danger">Tolak</a>
                </td>
            </tbody>
</table>

@endsection
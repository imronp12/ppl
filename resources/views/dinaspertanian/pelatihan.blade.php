@extends('layouts.app')

@section('title','pelatihan')

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">JUDUL</th>
            <th scope="col">TEMPAT</th>
            <th scope="col">WAKTU</th>
            <th scope="col">AKSI</th>
        </tr>
    </thead>
            <tbody>
            @foreach($data_pelatihan as $pelatihan)
            <tr>
                <td>{{$pelatihan->Judul}}</td>
                <td>{{$pelatihan->Tempat}}</td>
                <td>{{$pelatihan->Waktu}}</td>
                <td>
                    <a href="/dinaspertanian/pelatihan/{{$pelatihan->id}}/editpelatihan" class="badge badge-warning">Edit</a>
                </td>
            </tr>
            @endforeach
            </tbody>
</table>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambahkan Pelatihan
        </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pelatihan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/pelatihan/create" method="POST">
          @csrf
          <div class="form-group">
             <label for="exampleJudul1">Judul</label>
             <textarea name="judul" class="form-control" id="exampleJudul1" rows="3" placeholder="Judul Pelatihan"></textarea>
           </div>
          <div class="form-group">
             <label for="exampleInputTempat1">Tempat</label>
             <input name="tempat" type="tempat" class="form-control" id="exampleInputtempat1" aria-describedby="tempatHelp" placeholder="Tempat Pelatihan">
             </div>
          <div class="form-group">
             <label for="exampleInputWaktu1">Waktu</label>
             <input name="waktu" type="waktu" class="form-control" id="exampleInputwaktu1" aria-describedby="waktuHelp" placeholder="Tahun/Bulan/Tanggal">
          </div>

          <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@endsection

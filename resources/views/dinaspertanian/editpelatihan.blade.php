@extends('layouts.app')

@section('title','editpelatihan')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-10">
        <form action="/dinaspertanian/pelatihan/{{$pelatihan->id}}/updatepelatihan" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleJudul1">Judul</label>
            <textarea name="judul" type="text" class="form-control" id="exampleJudul1" rows="3" placeholder="Judul Pelatihan" value="{{$pelatihan->Judul}}"></textarea>
           </div>
           <div class="form-group">
               <label for="exampleInputTempat1">Tempat</label>
             <input name="tempat" type="text" class="form-control" id="exampleInputtempat1" aria-describedby="tempatHelp" placeholder="Tempat Pelatihan" value="{{$pelatihan->Tempat}}">
            </div>
            <div class="form-group">
                <label for="exampleInputWaktu1">Waktu</label>
                <input name="waktu" type="date" class="form-control" id="exampleInputwaktu1" aria-describedby="waktuHelp" placeholder="Tahun/Bulan/Tanggal" value="{{$pelatihan->Waktu}}">
            </div>
           <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@endsection

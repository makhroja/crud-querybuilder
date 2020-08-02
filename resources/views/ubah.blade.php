@extends('layouts.app')

@section('content')
<br><br><br>
<form action="/update-siswa" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input value="{{ $siswa->nama }}" name="nama" type="text" class="form-control col-md-4">
    </div>
    <div class="form-group">
        <label>Kelas</label>
        <input value="{{ $siswa->kelas }}" name="kelas" type="text" class="form-control col-md-4">
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input value="{{ $siswa->jurusan }}" name="jurusan" type="text" class="form-control col-md-4">
    </div>
    <input type="hidden" name="id" value="{{$siswa->id}}">
    <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
<br><br><br>
<form action="/create-siswa" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input name="nama" type="text" class="form-control col-md-4">
    </div>
    <div class="form-group">
        <label>Kelas</label>
        <input name="kelas" type="text" class="form-control col-md-4">
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input name="jurusan" type="text" class="form-control col-md-4">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
<br><br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="5%">No</th>
            <th width="">Nama</th>
            <th width="">Kelas</th>
            <th width="">Jurusan</th>
            <th width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswas as $key => $siswa)
        <tr>
            <th>{{$key+1}}</th>
            <th>{{$siswa->nama}}</th>
            <th>{{$siswa->kelas}}</th>
            <th>{{$siswa->jurusan}}</th>
            <th>
                <a href="{{ url('/edit')}}/{{$siswa->id}}" class="btn btn-sm btn-primary">Edit</a> ||
                 <a href="{{ url('/hapus')}}/{{$siswa->id}}" class="btn btn-sm btn-danger">Hapus</a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

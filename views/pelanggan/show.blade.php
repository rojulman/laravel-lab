@extends('adminlayouts.app')
@section('content')
<h1>Data Pelanggan ID: #{{$pelanggan->id}}</h1>
<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td>{{$pelanggan->id}}</td></tr>
        <tr><td>Kode Pelanggan</td><td>{{$pelanggan->kode}}</td></tr>
        <tr><td>Nama Pelanggan</td><td>{{$pelanggan->nama}}</td></tr>
        <tr><td>Gender</td><td>{{$pelanggan->jk}}</td></tr>
        <tr><td>Tempat, Tanggal Lahir</td>
             <td>{{$pelanggan->tmp_lahir}},{{$pelanggan->tgl_lahir}}</td></tr>
        <tr><td>Email</td><td>{{$pelanggan->email}}</td></tr>  
        <tr><td>Jenis Kartu</td><td>{{$pelanggan->kartu->nama}}</td></tr>   
    </tbody>
</table>

@endsection
@extends('adminlayouts.app')
@section('content')
<h2>Form Ubah Data Pelanggan #{{$pelanggan->id}}</h2>
<form method="POST" action="{{url('pelanggan/update')}}">
    @csrf
<div>
   <div class="mb-2">
    <label for="kode" class="form-label">Kode</label>
    <input type="kode" class="form-control" id="kode" name="kode" value="{{$pelanggan->kode}}">
  </div>
  <div class="mb-2">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{$pelanggan->nama}}">
  </div>
  <div class="mb-2">
    <label for="gender" class="form-label">Gender</label>
    <div class="mform-check form-check-inline">
  @php $jk_l = ($pelanggan->jk=='L')?"checked":""; @endphp
  @php $jk_p = ($pelanggan->jk=='P')?"checked":""; @endphp
  <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L" {{$jk_l}}>
  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
</div>
<div class="mform-check form-check-inline">
  <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="W" {{$jk_p}}>
  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>
</div>
</div>
<div class="mb-2">
    <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{$pelanggan->tmp_lahir}}">
  </div>
  <div class="mb-2">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{$pelanggan->tgl_lahir}}">
  </div>
  <div class="mb-2">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$pelanggan->email}}">
  </div>
    <div class="mb-2">
    <label for="id_kartu" class="form-label">Kartu</label>
   
    <select class="form-select" id="id_kartu" name="id_kartu">
      @foreach($ar_kartu as $kartu)
      @php $sel=($pelanggan->kartu_id==$kartu->id)?"selected":""; @endphp
        <option value="{{ $kartu->id }}" {{$sel}}>{{ $kartu->nama }}</option>
      @endforeach
    </select>
    </div>
    <input type="hidden" name="idedit" value="{{$pelanggan->id}}"/>
    <button type="submit" class="btn btn-primary">Update Data</button>
</form>
@endsection
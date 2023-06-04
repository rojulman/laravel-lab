@extends('adminlayouts.app')
@section('content')
<h2>Form Buat Pelanggan Baru</h2>
<form method="POST" action="{{url('pelanggan/store')}}">
    @csrf
<div>
   <div class="mb-2">
    <label for="kode" class="form-label">Kode</label>
    <input type="kode" class="form-control" id="kode" name="kode">
  </div>
  <div class="mb-2">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-2">
    <label for="gender" class="form-label">Gender</label>
    <div class="mform-check form-check-inline">
  <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
</div>
<div class="mform-check form-check-inline">
  <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="W">
  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>
</div>
</div>
<div class="mb-2">
    <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir">
  </div>
  <div class="mb-2">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
  </div>
  <div class="mb-2">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
    <div class="mb-2">
    <label for="id_kartu" class="form-label">Kartu</label>
    <select class="form-select" id="id_kartu" name="id_kartu">
      @foreach($ar_kartu as $kartu)
        <option value="{{ $kartu->id }}">{{ $kartu->nama }}</option>
      @endforeach
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
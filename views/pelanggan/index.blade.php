@extends('adminlayouts.app')
@section('content')
<h1>Daftar Pelanggan</h1>
<a href="{{ url('pelanggan/create') }}" class="btn btn-primary">Tambah</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Kartu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pelanggan as $p)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $p->kode }}</td>
      <td>{{ $p->nama }}</td>
      <td>{{ $p->jk }}</td>
      <td>{{ $p->email }}</td>
      <td>{{ $p->kartu->nama }}</td>
      <td>
        <a href="{{ url('pelanggan/view', $p->id) }}" class="btn btn-primary">View</a>
        <a href="{{ url('pelanggan/edit', $p->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ url('pelanggan/delete',$p->id)}}" class="btn btn-danger"
        onclick="confirmDelete(event)">Hapus</a>
      </td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
<script>
  function confirmDelete(event) {
    if (!confirm('Anda yakin Hapus Pelanggan ID {{$p->id}} ?')) {
      event.preventDefault(); // Prevents the default action of the link
      return false;
    }
  }
</script>
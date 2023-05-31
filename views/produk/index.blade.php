@extends('adminlayouts.app')
@section('content')
    <h1>Halaman Produk</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Jenis Produk</th>
                <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $nomor=1; ?>
            @foreach($arproduk as $no => $produk)
            <tr>
                <td>{{ $nomor }}</td>
                <td>{{ $produk->kode }}</td>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->harga_jual }}</td>
                <td>{{ $produk->stok }}</td>
                <td>{{ $produk->jenis_produk->nama }}</td>
                <td>
        <a href="{{ url('produk/show/'.$produk->id) }}">View</a>
        <a href="{{ url('produk/edit/'.$produk->id) }}">Edit</a>
        <a href="{{ url('produk/hapus/'.$produk->id) }}">Hapus</a>
      </td>
            </tr>
            <?php $nomor++ ?>
            @endforeach
        </tbody>
</table>
@endsection
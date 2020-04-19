@extends('admin.layout.home')

@section('title')
<?= $title; ?>
@endsection

@section('content')
<div class="container-fluid">

    <table class="table table-bordered" id="dataTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $barang)
            <tr>
                <td> {{$barang->nama_barang}} </td>
                <td> {{$barang->stok}} </td>
                <td> Rp.<?= number_format($barang->harga) ?> </td>
                <td> {{$barang->keterangan}} </td>
                <td> <img width="80px" src={{ asset('images/'. $barang->gambar) }} > </td>
                <td> Aksi </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
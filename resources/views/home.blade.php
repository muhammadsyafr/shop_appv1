@extends('layouts.app')

@section('content')
<style>
    .badge-pill {
       padding: 10px;
       /* width: 5%; */
    }
</style>
<div class="container">
    <div class="pb-3">
        <span class="badge badge-pill badge-primary">Sepatu</span>
        <span class="badge badge-pill badge-primary">Sepatu</span>
        <span class="badge badge-pill badge-primary">Sepatu</span>
    </div>
    <div class="row justify-content-center">
    @foreach($barangs as $barang)
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                   <img src="{{ url('images') }}/{{$barang->gambar}}" class="p-4 img-fluid">
                   {{$barang->nama_barang}} <br />
                   <b>Rp <?= number_format($barang->harga) ?></b>
                </div>
                <button onclick="event.preventDefault(); alert(' Add to cart ')" class="btn btn-success" >Add to cart</button>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-5 mb-4 row justify-content-center">
    {{ $barangs->links() }}
    </div>
   
</div>
@endsection
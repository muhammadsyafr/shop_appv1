@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @foreach($barangs as $barang)
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-header"><b>{{$barang->nama_barang}}</b> <br /> Rp. {{$barang->harga}}</div>
                <div class="card-body">
                   <img src="{{ url('images') }}/{{$barang->gambar}}" class="p-4 img-fluid">
                   {{$barang->keterangan}}
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
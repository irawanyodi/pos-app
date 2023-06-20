@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'transaction'
])

@section('content')
    <div class="content">
        <div class="row">
            @foreach ($produk as $item)
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->nama }}</h4>
                        <p class="card-text">{{ $item->kategori }}</p>
                        <p class="card-text">Rp. {{ $item->harga }}</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
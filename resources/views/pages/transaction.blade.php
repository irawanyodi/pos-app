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
                        <form action="{{ route('cart.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <input type="hidden" value="{{ $item->nama }}" name="name">
                            <input type="hidden" value="{{ $item->harga }}" name="price">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-primary">Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@extends('layouts.app', [
    'class' => '',
    'elementActive' => ''
])

@section('content')
    <div class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success rounded">
                <p class="text-green-800">{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Keranjang</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20em">Nama</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-6">
                                                            <input type="hidden" name="id" value="{{ $item->id}}" >
                                                            <input type="text" name="quantity" value="{{ $item->quantity }}" 
                                                            class="form-control" />
                                                        </div>
                                                        <div class="col-3">
                                                            <button class="btn btn-sm btn-warning">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>Rp. {{ $item->price }}</td>
                                            <td>
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <button class="btn btn-danger">x</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row mb-3">
                            <div class="col-md-11 text-right">
                                Total : Rp. {{ Cart::getTotal() }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 text-right">
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-success">Bersihkan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'produk'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Tambah Produk</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('produk') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="kategori" class="col-md-3">Kategori</label>
                                <select class="form-control col-md-8" name="kategori" aria-label="Default select example">
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-3">Nama</label>
                                <input type="text" name="nama" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="stok" class="col-md-3">stok</label>
                                <input type="number" name="stok" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="harga" class="col-md-3">harga</label>
                                <input type="number" name="harga" class="form-control col-md-8" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
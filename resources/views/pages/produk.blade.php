@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'produk'
])

@section('content')
    <div id="controller" class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('produk/create') }}" class="btn btn-outline-primary btn-round bg-light"><i class="nc-icon nc-simple-add"></i> Produk</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="produk-table">
                                <thead class=" text-primary">
                                    <th>
                                        Kategori
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Stok
                                    </th>
                                    <th class="text-right">
                                        Harga
                                    </th>
                                    <th class="text-right">
                                        Aksi
                                    </th>
                                </thead>
                                {{-- <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{ $item->kategori }}
                                        </td>
                                        <td>
                                            {{ $item->nama }}
                                        </td>
                                        <td>
                                            {{ $item->stok }}
                                        </td>
                                        <td class="text-right">
                                            Rp. {{ $item->harga }}
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-warning btn-fab btn-icon btn-round">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="btn btn-danger btn-fab btn-icon btn-round">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> Table on Plain Background</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Country
                                    </th>
                                    <th>
                                        City
                                    </th>
                                    <th class="text-right">
                                        Salary
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td class="text-right">
                                            $36,738
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Minerva Hooper
                                        </td>
                                        <td>
                                            Curaçao
                                        </td>
                                        <td>
                                            Sinaai-Waas
                                        </td>
                                        <td class="text-right">
                                            $23,789
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sage Rodriguez
                                        </td>
                                        <td>
                                            Netherlands
                                        </td>
                                        <td>
                                            Baileux
                                        </td>
                                        <td class="text-right">
                                            $56,142
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Philip Chaney
                                        </td>
                                        <td>
                                            Korea, South
                                        </td>
                                        <td>
                                            Overland Park
                                        </td>
                                        <td class="text-right">
                                            $38,735
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Doris Greene
                                        </td>
                                        <td>
                                            Malawi
                                        </td>
                                        <td>
                                            Feldkirchen in Kärnten
                                        </td>
                                        <td class="text-right">
                                            $63,542
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mason Porter
                                        </td>
                                        <td>
                                            Chile
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $78,615
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Jon Porter
                                        </td>
                                        <td>
                                            Portugal
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $98,615
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@section('js')
<script>
    var actUrl = '{{ url('authors') }}';
    var apiUrl = '{{ url('api/produk') }}';

    var columns = [
        // {data: 'DT_RowIndex', class: 'text-center', orderable: true},   
        {data: 'kategori', orderable: true},
        {data: 'nama', orderable: true},
        {data: 'stok', orderable: true},
        {data: 'harga', class: 'text-center', orderable: true},
        // {data: 'date', class: 'text-center', orderable: true},
        {render: function (index, row, data, meta) {
            return `
            <a href="{{ url('produk')}}/${data.id}/edit">
            <button class="btn btn-warning btn-fab btn-icon btn-round">
                <i class="fa-solid fa-pen-to-square"></i>
            </button></a>
            <form action="{{ url('produk') }}/${data.id}" method="post" class="d-inline-block">
                <button type="submit" value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-fab btn-icon btn-round">
                    <i class="fa-solid fa-trash"></i>
                </button>
                @method('delete')
                @csrf
            </form>`;
        }, orderable: false, width: '110px', class: 'text-center'},
    ];
</script>
<script src="{{ asset('js/data.js') }}"></script>
@endsection
@extends('root')

@section('htmlheader_title')
    - Productos
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <solid-box color="danger" title="Lista de productos">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th></th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ $product->img }}" alt="{{ $product->description }}" width="50px"></td>
                                <td>
                                    {{ $product->description }} <br>
                                    <i class="fa fa-barcode" aria-hidden="true"></i> {{ $product->code }}
                                </td>
                                <td>{{ $product->small }}</td>
                                <td>{{ $product->medium }}</td>
                                <td>{{ $product->large }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

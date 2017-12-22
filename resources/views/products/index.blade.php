@extends('root')

@section('htmlheader_title')
    - Productos
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-2 col-md-push-10"  align="center">
            <a href="{{ route('products.create') }}" class="btn btn-app">
                <i class="fa fa-plus"></i> Agregar producto
            </a>
        </div>
        <div class="col-md-10 col-md-pull-2">
            <solid-box color="danger" title="Lista de productos">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>
                                <span class="label label-info">XS</span>
                                <span class="label label-primary">S</span>
                                <span class="label label-success">M</span>
                                <span class="label label-warning">L</span>
                                <span class="label label-danger">XL</span>
                            </th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td align="center">
                                    <modal-button target="image{{ $product->id }}">
                                        <img src="{{ $product->img_url }}" alt="{{ $product->description }}" height="60px">
                                    </modal-button>
                                    <modal id="image{{ $product->id }}" title="{{ $product->description }}">
                                        <img src="{{ $product->img_url }}" alt="{{ $product->description }}" width="80%">
                                        <hr>
                                        <span class="pull-left"><b>Precio público:</b> ${{ $product->public }}</span>
                                        <span class="pull-right"><b>Proveedor:</b> {{ $product->provider }}</span><br>
                                        <span class="pull-left"><b>Precio compra:</b> ${{ $product->price }}</span>
                                    </modal>
                                </td>
                                <td>
                                    {{ $product->description }} <br>
                                    <i class="fa fa-barcode" aria-hidden="true"></i> {{ $product->code }} <br>
                                    <i class="fa fa-tags" aria-hidden="true"></i> {{ $product->family }}
                                </td>
                                @if ($product->type == 'unisize')
                                    <td>
                                        <span class="label label-default">{{ $product->unisize }}</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="label label-info">{{ $product->xsmall }}</span>
                                        <span class="label label-primary">{{ $product->small }}</span>
                                        <span class="label label-success">{{ $product->medium }}</span>
                                        <span class="label label-warning">{{ $product->large }}</span>
                                        <span class="label label-danger">{{ $product->xlarge }}</span>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{ route('products.edit', ['product' => $product->id])}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

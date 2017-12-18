@extends('root')

@section('htmlheader_title')
    - Ventas
@endsection

@section('content-header')
    Ventas
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-2 col-md-push-10"  align="center">
            <a href="{{ route('sales.create') }}" class="btn btn-app">
                <i class="fa fa-plus"></i> Agregar venta
            </a>
        </div>
        <div class="col-md-10 col-md-pull-2">
            <solid-box color="danger" title="Lista de ventas">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Descripción</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($sales as $sale)
                            <tr>
                                <td>{{ $sale->id }}</td>
                                <td>{{ $sale->created_at }}</td>
                                <td>{{ $sale->total }}</td>
                                <td>
                                    {{ $sale->q1 }} {{ $sale->p1 }},
                                    {{ $sale->q2 }} {{ $sale->p2 }},
                                    {{ $sale->q3 }} {{ $sale->p3 }},
                                    {{ $sale->q4 }} {{ $sale->p4 }},
                                    {{ $sale->q5 }} {{ $sale->p5 }}
                                    <a href="{{ route('sales.edit', ['sale' => $sale->id])}}">
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

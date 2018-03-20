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
                <data-table example="Desc">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Total</th>
                            <th>Descripción</th>
                            <th><i class="fa fa-cogs"></i></th>
                            <th>Estado</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($sales as $sale)
                            <tr>
                                <td>{{ $sale->id }}</td>
                                <td>{{ fdate($sale->created_at, 'l, d \d\e M') }}</td>
                                <td>
                                    <a href="{{ route('members.show', ['member' => $sale->client]) }}">
                                        {{ $sale->client_name }}
                                    </a>
                                </td>
                                <td>
                                    $ {{ number_format($sale->total, 2) }}<br>
                                    {{ $sale->discount ? '(Se descontó $' . number_format($sale->discount, 2) . ")": ''}}
                                </td>
                                <td>
                                    @for ($i=1; $i < 6; $i++)
                                        @if ($sale->{"q$i"})
                                            {{ $sale->{"q$i"} . " " . $sale->{"product$i"}->description }}
                                            <br>
                                        @endif
                                    @endfor
                                </td>
                                <td>
                                    <dropdown color="danger" icon="cogs">
                                        @if ($sale->credit)
                                            <ddi to="{{ route('sales.deposits', ['sale' => $sale->id])}}" icon="usd" text="Abonar"></ddi>
                                        @endif
                                        <ddi to="{{ route('sales.edit', ['sale' => $sale->id])}}" icon="pencil" text="Editar"></ddi>
                                    </dropdown>
                                </td>
                                <td>
                                    <code style="{{ $sale->status ? "color:#04b07b;": ''}}">
                                        {{ $sale->status_str }}
                                    </code>
                                    {{ $sale->credit ? '(C)': '' }}
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>

    </div>
@endsection

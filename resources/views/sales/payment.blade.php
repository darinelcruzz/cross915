@extends('root')

@section('htmlheader_title')
    - Abonos
@endsection

@section('content-header')
    Abonos
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-5">
            <solid-box title="Agregar abono" color="danger">
                <pre>
                Total a pagar: $ {{ number_format($sale->total, 2) }}
                Pendiente: $ {{ number_format($sale->pending, 2) }}
                Abonado: $ {{ number_format($sale->total - $sale->pending, 2) }}
                </pre>
                {!! Form::open(['method' => 'POST', 'route' => 'deposits.store']) !!}
                    {!! Field::number('amount',
                        ['tpl' => 'templates/withicon', 'max' => "$sale->pending", 'min' => '0', 'step' => '0.01'],
                        ['icon' => 'money'])
                    !!}

                    <hr>

                    <a href="{{ route('sales.index') }}"
                        class="btn btn-danger">
                        <i class="fa fa-backward" aria-hidden="true"></i>&nbsp;Regresar
                    </a>
                    <input type="hidden" name="sale" value="{{ $sale->id }}">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary pull-right', 'disabled' => $sale->pending == 0]) !!}
                {!! Form::close() !!}
            </solid-box>
        </div>

        <div class="col-md-7">
            <solid-box title="Abonos realizados" color="success">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($sale->deposits as $deposit)
                            <tr>
                                <td>{{ fdate($deposit->created_at, 'l, d \d\e F') }}</td>
                                <td>$ {{ number_format($deposit->amount, 2) }}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

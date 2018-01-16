@extends('root')

@section('htmlheader_title')
    - Pagos
@endsection

@section('content-header')
    Pagos
@endsection

@section('main-content')
    <div class="row">
        <!--div class="col-md-2 col-md-push-10"  align="center">
            <a href="{ { route('payments.create') }}" class="btn btn-app">
                <i class="fa fa-plus"></i> Agregar pago
            </a>
        </div-->
        <div class="col-md-10">
            <solid-box color="danger" title="Lista de pagos">
                <data-table example="Desc">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Miembro</th>
                            <th>Membresía</th>
                            <th>Descuento</th>
                            <th>Total</i></th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->date }}</td>
                                <td><a href="{{ route('members.show', ['id' => $payment->member->id])}}">{{ $payment->member->name }}</a></td>
                                <td>{{ $payment->membership->name }}</td>
                                <td>{{ $payment->discount->name or 'Sin descuento' }}</td>
                                <td>${{ $payment->amount }}.00</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>

    </div>
@endsection

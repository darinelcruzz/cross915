@extends('root')

@section('htmlheader_title')
    - Gastos
@endsection

@section('content-header')
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-4">
            <simple-box title="Agregar gasto" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'expenses.store']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::text('description') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::number('amount', ['min' => '0', 'step' => '.01']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Field::date('date', $date) !!}
                        </div>
                    </div>
                    {!! Form::submit('Agregar', ['class' => 'btn btn-black btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
        <div class="col-md-8">
            <solid-box title="Últimos gastos" color="danger">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Monto</th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($expenses as $expense)
                            <tr>
                                <td>{{ $expense->id }}</td>
                                <td>{{ $expense->description }}</td>
                                <td>${{ number_format($expense->amount, 2) }}</td>
                                <td>{{ $expense->date }}</td>
                                <td>
                                    <a href="{{ route('expenses.edit', ['expense' => $expense->id])}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </template>
            </solid-box>
        </div>
    </div>
@endsection

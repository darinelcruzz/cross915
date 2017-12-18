@extends('root')

@section('htmlheader_title')
    - Editar gastos
@endsection

@section('content-header')
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <simple-box title="Editar gasto - {{  $expense->description }}" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'expenses.store']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::text('description', $expense->description) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::number('amount', $expense->amount,['min' => '0', 'step' => '.01']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Field::date('date', $expense->date) !!}
                        </div>
                    </div>
                    {!! Form::submit('Editar', ['class' => 'btn btn-black btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
@endsection

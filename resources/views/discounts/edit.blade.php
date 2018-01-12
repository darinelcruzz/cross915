@extends('root')

@section('htmlheader_title')
    - Editar descuento
@endsection

@section('content-header')
    Editar descuento
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'discounts.update']) !!}

                    {!! Field::text('name', $discount->name, ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    {!! Field::text('description', $discount->description, ['tpl' => 'templates/withicon'], ['icon' => 'indent']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('type',
                                    ['0' => 'Porcentaje', '1' => 'Monto'], $discount->type,
                                    ['empty' => 'Seleccione el tipo de descuento', 'tpl' => 'templates/withicon'], ['icon' => 'tint'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::number('amount', $discount->amount,  ['min' => '0', 'tpl' => 'templates/withicon'], ['icon' => 'dollar']) !!}
                        </div>
                    </div>
                    <hr>
                    <input type="hidden" name="status" value="1">
                    <input type="hidden" name="id" value="{{ $discount->id }}">
                    {!! Form::submit('Editar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

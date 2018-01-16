@extends('root')

@section('htmlheader_title')
    - Crear descuento
@endsection

@section('content-header')
    Crear descuento
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'discounts.store']) !!}

                    {!! Field::text('name', ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    {!! Field::text('description', ['tpl' => 'templates/withicon'], ['icon' => 'indent']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('type',
                                    ['1' => 'Monto'], null,
                                    ['empty' => 'Seleccione el tipo de descuento', 'tpl' => 'templates/withicon'], ['icon' => 'tint'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::number('amount', 0, ['min' => '0', 'tpl' => 'templates/withicon'], ['icon' => 'dollar']) !!}
                        </div>
                    </div>
                    <hr>
                    <input type="hidden" name="status" value="1">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

@extends('root')

@section('htmlheader_title')
    - Crear membresía
@endsection

@section('content-header')
    Crear membresía
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'memberships.store']) !!}

                    {!! Field::text('name', ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    {!! Field::text('description', ['tpl' => 'templates/withicon'], ['icon' => 'indent']) !!}
                    {!! Field::select('type',['año' => 'Anual', 'meses' => 'Mesual', 'dias' => 'Días'], null,
                        ['empty' => 'Seleccione el tipo', 'tpl' => 'templates/withicon'], ['icon' => 'calendar'])!!}
                    {!! Field::number('amount', 0, ['step' => '0.01', 'min' => '0', 'tpl' => 'templates/withicon'], ['icon' => 'dollar']) !!}
                    <hr>
                    <input type="hidden" name="status" value="1">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

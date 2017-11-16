@extends('root')

@section('htmlheader_title')
    - Crear entrenador
@endsection

@section('content-header')
    Crear entrenador
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'coaches.store']) !!}
                    {!! Field::text('name', ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    {!! Field::text('username', ['tpl' => 'templates/withicon'], ['icon' => 'user']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::date('birthdate', ['tpl' => 'templates/withicon'], ['icon' => 'birthday-cake']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null,
                                ['tpl' => 'templates/withicon', 'empty' => 'Elije sexo'], ['icon' => 'venus-mars']) !!}
                        </div>
                    </div>

                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

@extends('root')

@section('htmlheader_title')
    - Crear clase
@endsection

@section('content-header')
    Crear clase
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-6">
            <solid-box title="Escoger WOD y coach" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'trainings.store']) !!}
                    {!! Field::select('coach_id', $coaches, null,
                        ['label' => 'Entrenador/a', 'tpl' => 'templates/withicon', 'empty' => 'Elegir entrenador/a'],
                        ['icon' => 'male'])
                    !!}
                    {!! Field::select('workout_id', $workouts, null,
                        ['label' => 'WOD', 'tpl' => 'templates/withicon', 'empty' => 'Elegir WOD'],
                        ['icon' => 'bolt'])
                    !!}
                    {!! Field::select('color', ['success' => 'Verde', 'danger' => 'Rojo', 'info' => 'Celeste',
                        'warning' => 'Amarillo'],
                        null, ['tpl' => 'templates/withicon', 'empty' => 'Elegir un color'],
                        ['icon' => 'paint-brush'])
                    !!}

                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger pull-right'])!!}
                {!! Form::close() !!}
            </solid-box>
        </div>
    </div>

@endsection

@extends('root')

@section('htmlheader_title')
    - Editar horario
@endsection

@section('content-header')
    Editar horario
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6">
            <solid-box title="Agregar clases al horario de las {{ $schedule->hour }}" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'schedules.update']) !!}
                <code>LUNES</code>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('monday_coach', $coaches, null,
                                ['tpl' => 'templates/withicon', 'label' => 'Entrenador', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'user'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('monday_workout', $workouts, null,
                                ['tpl' => 'templates/withicon', 'label' => 'WOD', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'bolt'])!!}
                        </div>
                    </div>
                <code>MARTES</code>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('tuesday_coach', $coaches, null,
                                ['tpl' => 'templates/withicon', 'label' => 'Entrenador', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'user'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('tuesday_workout', $workouts, null,
                                ['tpl' => 'templates/withicon', 'label' => 'WOD', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'bolt'])!!}
                        </div>
                    </div>
                <code>MIÉRCOLES</code>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('wednesday_coach', $coaches, null,
                                ['tpl' => 'templates/withicon', 'label' => 'Entrenador', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'user'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('wednesday_workout', $workouts, null,
                                ['tpl' => 'templates/withicon', 'label' => 'WOD', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'bolt'])!!}
                        </div>
                    </div>
                <code>JUEVES</code>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('thursday_coach', $coaches, null,
                                ['tpl' => 'templates/withicon', 'label' => 'Entrenador', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'user'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('thursday_workout', $workouts, null,
                                ['tpl' => 'templates/withicon', 'label' => 'WOD', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'bolt'])!!}
                        </div>
                    </div>
                <code>VIERNES</code>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('friday_coach', $coaches, null,
                                ['tpl' => 'templates/withicon', 'label' => 'Entrenador', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'user'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('friday_workout', $workouts, null,
                                ['tpl' => 'templates/withicon', 'label' => 'WOD', 'empty' => 'Elegir un entrenador'],
                                ['icon' => 'bolt'])!!}
                        </div>
                    </div>
                    <hr>
                    <input type="hidden" name="id" value="{{ $schedule->id }}">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-danger pull-right'])!!}
                {!! Form::close() !!}
            </solid-box>
        </div>
    </div>
@endsection

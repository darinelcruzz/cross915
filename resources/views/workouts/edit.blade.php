@extends('root')

@section('htmlheader_title')
    - Editar WOD
@endsection

@section('content-header')

@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-7">
            <solid-box title="Editar WOD" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'workouts.update']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::text('name', ['tpl' => 'templates/withicon', 'ph' => 'ejemplo: John Cena'], ['icon' => 'comment-o']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('type',
                                ['AMRAP' => 'AMRAP', 'EMOM' => 'EMOM', 'FOR TIME' => 'FOR TIME', 'MAX' => 'MAX', 'NO FOR TIME' => 'NO FOR TIME'], null,
                                ['tpl' => 'templates/withicon', 'empty' => 'Selecciona tipo'], ['icon' => 'certificate'])
                            !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::number('duration', 1, ['tpl' => 'templates/withicon', 'step' => '0.1', 'min' => '0'], ['icon' => 'clock-o']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('difficulty',
                                ['Principiante', 'Intermedio', 'Atleta', 'Pro', 'Invencible'], null,
                                ['tpl' => 'templates/withicon', 'empty' => 'Seleccione dificultad'], ['icon' => 'bomb'])
                            !!}
                        </div>
                    </div>

                    {!! Field::textarea('description', ['ph' => 'Revisar las instrucciones para dar formato a la descripción']) !!}

                {!! Form::close() !!}
            </solid-box>
        </div>

        <div class="col-md-5">
            <solid-box title="Intrucciones" color="danger">
                <pre>
                    {{ $instructions }}
                </pre>
                {!! toMD($instructions) !!}
            </solid-box>
        </div>
    </div>

@endsection

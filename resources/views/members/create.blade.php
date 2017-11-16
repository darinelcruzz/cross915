@extends('root')

@section('htmlheader_title')
    - Crear miembro
@endsection

@section('content-header')
    Crear miembro
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'members.store']) !!}
                    {!! Field::text('name', ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    {!! Field::email('email', ['tpl' => 'templates/withicon'], ['icon' => 'at']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::date('birthdate', ['tpl' => 'templates/withicon'], ['icon' => 'birthday-cake']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null,
                                ['tpl' => 'templates/withicon', 'empty' => 'Elije sexo'], ['icon' => 'venus-mars']) !!}
                        </div>
                    </div>
                    {!! Field::select('membership_id', $memberships, null,
                        ['tpl' => 'templates/withicon', 'empty' => 'Seleccione tipo de membresía'], ['icon' => 'credit-card']) !!}
                    {!! Field::select('schedule_id', $schedules, null,
                        ['tpl' => 'templates/withicon', 'empty' => 'Seleccione un horario'], ['icon' => 'clock-o']) !!}

                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

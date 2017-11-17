@extends('root')

@section('htmlheader_title')
    - Editar miembro
@endsection

@section('content-header')
    Editar miembro
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'members.store']) !!}
                    {!! Field::text('name', $member->name, ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::email('email', $member->email, ['tpl' => 'templates/withicon'], ['icon' => 'at']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::text('cellphone', $member->cellphone, ['tpl' => 'templates/withicon'], ['icon' => 'mobile']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::date('birthdate', $member->birthdate, ['tpl' => 'templates/withicon'], ['icon' => 'birthday-cake']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], $member->gender,
                                ['tpl' => 'templates/withicon', 'empty' => 'Elije sexo'], ['icon' => 'venus-mars']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6  col-md-offset-3">
                            {!! Field::select('blood',
                                    ['A+' => 'A+', 'A-' => 'A-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'B+' => 'B+',
                                    'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-'], $member->blood,
                                    ['empty' => 'Seleccione el tipo de sangre', 'tpl' => 'templates/withicon'], ['icon' => 'tint'])!!}
                        </div>
                    </div>
                    {!! Field::select('membership_id', $memberships, $member->memberships,
                        ['tpl' => 'templates/withicon', 'empty' => 'Seleccione tipo de membresía'], ['icon' => 'credit-card']) !!}
                    {!! Field::select('schedule_id', $schedules, $member->schendules,
                        ['tpl' => 'templates/withicon', 'empty' => 'Seleccione un horario'], ['icon' => 'clock-o']) !!}

                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

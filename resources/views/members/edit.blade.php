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
            <simple-box title="Editar {{ $member->name }}" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'members.update']) !!}
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
                            {!! Field::text('address', $member->address, ['tpl' => 'templates/withicon'], ['icon' => 'map-marker']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::text('civil', $member->civil, ['tpl' => 'templates/withicon'], ['icon' => 'gavel']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::date('birthdate', $member->birthdate, ['tpl' => 'templates/withicon'], ['icon' => 'birthday-cake']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::text('profession', $member->profession, ['tpl' => 'templates/withicon'], ['icon' => 'briefcase']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], $member->gender,
                                ['tpl' => 'templates/withicon', 'empty' => 'Elije sexo'], ['icon' => 'venus-mars']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('blood',
                                    ['A+' => 'A+', 'A-' => 'A-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'B+' => 'B+',
                                    'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-'], $member->blood,
                                    ['empty' => 'Seleccione el tipo de sangre', 'tpl' => 'templates/withicon'], ['icon' => 'tint'])!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::select('schedule_id', $schedules, $member->schedule_id,
                                ['tpl' => 'templates/withicon', 'empty' => 'Seleccione un horario'], ['icon' => 'clock-o']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::date('ingress', $member->ingress,['tpl' => 'templates/withicon'], ['icon' => 'calendar']) !!}
                        </div>
                    </div>

                    <hr>
                    <input type="hidden" name="id" value="{{ $member->id }}">
                    <input type="hidden" name="status" value="1">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

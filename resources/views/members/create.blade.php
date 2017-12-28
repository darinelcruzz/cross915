@extends('root')

@section('htmlheader_title')
    - Crear miembro
@endsection

@section('content-header')
    Crear miembro
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'members.store', 'enctype' => 'multipart/form-data']) !!}
                    <div class="col-md-9">
                        {!! Field::text('name', ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::email('email', ['tpl' => 'templates/withicon'], ['icon' => 'at']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::text('cellphone', ['tpl' => 'templates/withicon'], ['icon' => 'mobile']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::text('address', ['tpl' => 'templates/withicon'], ['icon' => 'map-marker']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::text('civil', ['tpl' => 'templates/withicon'], ['icon' => 'gavel']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::date('birthdate', ['tpl' => 'templates/withicon'], ['icon' => 'birthday-cake']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::text('profession', ['tpl' => 'templates/withicon'], ['icon' => 'briefcase']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null,
                                    ['tpl' => 'templates/withicon', 'empty' => 'Elije sexo'], ['icon' => 'venus-mars']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::select('blood',
                                        ['A+' => 'A+', 'A-' => 'A-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'B+' => 'B+',
                                        'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-'], null,
                                        ['empty' => 'Seleccione el tipo de sangre', 'tpl' => 'templates/withicon'], ['icon' => 'tint'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::select('schedule_id', $schedules, null,
                                    ['tpl' => 'templates/withicon', 'empty' => 'Seleccione un horario'], ['icon' => 'clock-o']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::date('ingress', $date,['tpl' => 'templates/withicon'], ['icon' => 'calendar']) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::select('membership_id', $memberships, null,
                                    ['tpl' => 'templates/withicon', 'empty' => 'Seleccione tipo de membresía', 'v-model' => 'mdescription'],
                                    ['icon' => 'id-card-o'])
                                !!}
                            </div>
                            <div class="col-md-6">
                                <strong>Detalles de pago</strong><br>
                                <membership-details :mid="mdescription"></membership-details>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <b>Agregar foto</b><br>
                        <div align="center">
                            <br>
                            <div class="fileUpload btn btn-danger">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Subir imagen</span>
                                <input type="file" id="img" name="img" class="upload" @change="onFileChange" />
                            </div>
                            <div v-if="image" align="center">
                                <img :src="image" width="200px"/>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <input type="hidden" name="payment" value="{{ $date }}">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

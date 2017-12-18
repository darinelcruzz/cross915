@extends('root')

@section('htmlheader_title')
    - Asistencia
@endsection

@section('content-header')
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-5">
            <simple-box title="" color="danger">
                <div align="center" valign="middle">
                    <img width="120px" height="120px" src="{{ asset('/img/Cross915.png') }}">
                </div>
                {!! Form::open(['method' => 'POST', 'route' => 'attendences.store']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <select name="member_id" class="form-control select2" style="width: 100%;">
                              <option selected="selected" disabled>Buscar por nombre o id</option>
                              @foreach ($members as $key => $value)
                                  <option value="{{ $key }}">{{ $value . ' - ' . $key }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    {!! Form::submit('Continuar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
        <div class="col-md-7">
            <div class="box box-success">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="/img/avatar2.png" alt="User profile picture">
                    <h3 class="profile-username text-center">Hola, <b>{{ $member->name }}</b></h3>
                    <h4 class="profile-username text-center">Socio: <b>{{ $member->id }}00</b></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Membrecía</b> <a class="pull-right">{{ $member->membership_id }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Horario</b> <a class="pull-right">{{ $member->schedule_id }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Miembro desde</b> <a class="pull-right">{{ $member->inscription }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Último pago</b> <a class="pull-right">10/noviembre</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Vigencia</b> <a class="pull-right">lun, 10/diciembre</a>
                                </li>
                                <li class="list-group-item">
                                    <b>No se</b> <a class="pull-right">1</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="callout callout-success">
                        <h4 align="center">Te quedan: 15 días para tu proximo pago</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('simple')

@section('htmlheader_title')
    - Asistencia
@endsection

@section('content-header')
@endsection

@section('main-content')

    @if ($member->pendigDays <= 0 || ($member->visits <= 0 && $member->membership->type == 'v'))
        @php
            $color = "danger";
        @endphp
    @elseif ($member->pendigDays < 6 || ($member->visits < 6 && $member->membership->type == 'v'))
        @php
            $color = "warning";
        @endphp
    @else
        @php
            $color = "success";
        @endphp
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="box box-{{ $color }}">
                <div class="box-body box-profile">
                    <div class="row">
                        <div class="col-md-5">
                            <div align="center" valign="middle">
                                <img height="300px" src="{{ $member->img_url }}" style="border: 3px solid red;">
                            </div>
                            <h3 class="profile-username text-center">Hola, <b>{{ $member->name }}</b></h3>
                            <h4 class="profile-username text-center">Socio: <b>0{{ $member->id }}</b></h4>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-10">
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>Membrecía</b> <a class="pull-right">{{ $member->membership->name }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Horario</b> <a class="pull-right">{{ $member->schedule_id }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Miembro desde</b> <a class="pull-right">{{ $member->getShortDate('ingress') }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Último pago</b> <a class="pull-right">{{ $member->getShortWeekDate('payment') }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Vigencia</b> <a class="pull-right">{{ $member->getShortWeekDate('validity') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="callout callout-{{ $color }}">
                                    <h4 align="center">Te quedan:
                                        @if ($member->membership->type == 'm')
                                            {{ $member->pendigDays }}
                                        @else
                                            {{ $member->visits . ' visitas o ' .  $member->pendigDays }}
                                        @endif
                                        días para tu proximo pago</h4>
                                </div>
                                <div align="center" valign="middle">
                                    <a class="btn btn-danger pull" href="{{route("attendences.create")}}"><i class="fa fa-arrow-circle-left"></i> Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

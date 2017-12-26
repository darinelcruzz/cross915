@extends('root')

@section('htmlheader_title')
    - Miembros
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <solid-box color="danger" title="Lista de miembros">
                <data-table example="Desc">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Contacto</th>
                            <th>Datos</th>
                            <th>Menbrecia</th>
                            <th></th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($membersA as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td><a href="{{ route('members.show', ['id' => $member->id])}}">{{ $member->name }}</a></td>
                                <td>
                                    {{ $member->email }} <br>
                                    {{ $member->cellphone }} <br>
                                    {{ $member->address }}
                                </td>
                                <td>
                                    <i class="fa fa-birthday-cake"></i>&nbsp;&nbsp;&nbsp;{{ $member->birthday }} <br>
                                    <i class="fa fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;{{ $member->gender == 'M' ? 'Masculino' : 'Femenino' }} <br>
                                    <i class="fa fa-tint"></i>&nbsp;&nbsp;&nbsp;{{ $member->blood }}
                                </td>
                                <td>
                                    <i class="fa fa-id-card-o"></i>&nbsp;&nbsp;&nbsp;{{ $member->membership->name }} <br>
                                    <b>Próx. pago:</b> {{ $member->getShortDate('validity') }} <br>
                                    <i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;{{ $member->schedule_id }} <br>
                                </td>
                                <td>
                                    <span class="label label-success">A</span><br>
                                    <a href="{{ route('members.destroy', ['member' => $member->id])}}">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a><br>
                                    <a href="{{ route('members.edit', ['member' => $member->id])}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>

            <solid-box color="danger" title="Lista de miembros inactivos" collapsed button>
                <data-table example="Desc2">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Contacto</th>
                            <th>Datos</th>
                            <th>Menbrecia</th>
                            <th></th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($membersC as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td><a href="{{ route('members.show', ['id' => $member->id])}}">{{ $member->name }}</a></td>
                                <td>
                                    {{ $member->email }} <br>
                                    {{ $member->cellphone }} <br>
                                    {{ $member->address }}
                                </td>
                                <td>
                                    <i class="fa fa-birthday-cake"></i>&nbsp;&nbsp;&nbsp;{{ $member->birthday }} <br>
                                    <i class="fa fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;{{ $member->gender == 'M' ? 'Masculino' : 'Femenino' }} <br>
                                    <i class="fa fa-tint"></i>&nbsp;&nbsp;&nbsp;{{ $member->blood }}
                                </td>
                                <td>
                                    <i class="fa fa-id-card-o"></i>&nbsp;&nbsp;&nbsp;{{ $member->membership->name }} <br>
                                    <b>Próx. pago:</b> {{ $member->getShortDate('validity') }} <br>
                                    <i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;{{ $member->schedule_id }} <br>
                                </td>
                                <td>
                                    <span class="label label-danger">C</span><br>
                                    <a href="{{ route('members.edit', ['member' => $member->id])}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

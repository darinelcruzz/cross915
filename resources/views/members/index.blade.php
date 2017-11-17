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
                <data-table example="1">
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
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td><a href="{{ route('members.show', ['id' => $member->id])}}">{{ $member->name }}</a></td>
                                <td>
                                    {{ $member->email }} <br>
                                    {{ $member->cellphone }} <br>
                                </td>
                                <td>
                                    <i class="fa fa-birthday-cake"></i>&nbsp;&nbsp;&nbsp;{{ $member->birthday }} <br>
                                    <i class="fa fa-venus-mars"></i>&nbsp;&nbsp;&nbsp;{{ $member->sex == 'M' ? 'Masculino' : 'Femenino' }} <br>
                                    <i class="fa fa-tint"></i>&nbsp;&nbsp;&nbsp;{{ $member->blood }}
                                </td>
                                <td>
                                    {{ $member->membership == 1 ? 'Estudiante' : 'Mensual' }} <br>
                                    <b>Último pago:</b> {{ $member->date }} <br>
                                    <i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;{{ $member->schendule }} <br>
                                </td>
                                <td>
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

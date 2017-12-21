@extends('root')

@section('htmlheader_title')
    - Detalles miembro
@endsection

@section('content-header')
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-4 col-md-push-8">
            <div class="box box-danger">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="/img/avatar2.png" alt="User profile picture">
                    <h3 class="profile-username text-center">{{ $member->name }}</h3>
                    <p class="text-muted text-center">{{ $member->membership_id == 1 ? 'Estudiante' : 'Mensual' }}</p>
                    {!! Form::open(['method' => 'POST', 'route' => 'members.update']) !!}
                        {!! Field::textarea('comments', $member->comments, ['tpl' => 'templates/withicon', 'rows' => '3', 'placeholder' => 'Comentarios...'],
                            ['icon' => 'font']) !!}
                        <br>
                        <input type="hidden" name="id" value="{{ $member->id }}">
                        {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
            <simple-box title="Detalles miembro" color="danger">
                @include('templates.headTable')
                        <tr>
                            <td><B>Horario:</B><dd>{{ $member->schedule_id }}</dd></td>
                            <td><B>Fecha de ingreso:</B><dd>{{ $member->getDate('ingress') }}</dd></td>
                            <td><B>Último pago:</B><dd>{{ $member->getDate('payment') }}</dd></td>
                        </tr>
                        <tr>
                            <td><B>Membresía:</B><dd>{{ $member->membership->name }}</dd></td>
                            <td><B>Visitas:</B><dd>{{ $member->membership->type == 'm' ? 'Ilimitadas' : $member->visits }}</dd></td>
                            <td><B>Próximo pago:</B><dd>{{ $member->getDate('validity') }}</dd></td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    </h3>
                </div>
                @include('templates.headTable')
                        <tr>
                            <td><B>Cuempleños:</B><dd>{{ $member->birthday }}</dd></td>
                            <td><B>Tipo de Sangre:</B><dd>{{ $member->blood }}</dd></td>
                            <td><B>Sexo:</B><dd>{{ $member->sex == 'M' ? 'Masculino' : 'Femenino' }}</dd></td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <div class="box-header with-border">
                    <h3 class="box-title">
                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                    </h3>
                </div>
                @include('templates.headTable')
                        <tr>
                            <td><B>Correo:</B><dd>{{ $member->email }}</dd></td>
                            <td><B>Celular:</B><dd>{{ $member->cellphone }}</dd></td>
                        </tr>
                    </tbody>
                </table>
            </simple-box>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <solid-box title="Ultimos pagos" color="danger" collapsed button>
            </solid-box>
        </div>

        <div class="col-md-4">
            <solid-box title="Asistenciassss" color="danger" collapsed button>
                <data-table example="Desc">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Hora y fecha</th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($attendences as $attendence)
                            <tr>
                                <td>{{ $attendence->id }}</td>
                                <td>{{ $attendence->hourDate }}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>

@endsection

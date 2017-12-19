@extends('root')

@section('htmlheader_title')
    - Membresías
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6"  align="center">
            <a href="{{ route('memberships.create') }}" class="btn btn-app">
                <i class="fa fa-plus"></i> Agregar membresía
            </a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6"  align="center">
            <a href="{{ route('memberships.create') }}" class="btn btn-app">
                <i class="fa fa-plus"></i> Agregar descuentos
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <solid-box color="danger" title="Lista de membresías">
                <data-table example="Desc">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Monto</th>
                            <th>Tiempo</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($memberships as $membership)
                            <tr>
                                <td>{{ $membership->id }}</td>
                                <td>{{ $membership->name }}</td>
                                <td>{{ $membership->description }}</td>
                                <td>${{ number_format($membership->amount,2) }}</td>
                                <td>{{ $membership->type == 'm' ? $membership->months . ' meses' : $membership->visits . ' visitas en ' . $membership->months . ' meses' }}</td>
                                <td>
                                    @if ($membership->status == 1)
                                        <span class="label label-success">Activa</span>
                                    @else
                                        <span class="label label-danger">Cancelada</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('memberships.edit', ['membership' => $membership->id])}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    @if ($membership->status == 1)
                                        <a href="{{ route('memberships.destroy', ['membership' => $membership->id])}}">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <solid-box color="danger" title="Lista de descuentos">
                <data-table example="Desc2">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Monto</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </template>
                    <template slot="body">

                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

@extends('root')

@section('htmlheader_title')
    - WODs
@endsection

@section('content-header')

@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-7">
            <solid-box title="WODs" color="danger">
                <data-table example="S">
                    <template slot="header">
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Duración</th>
                            <th>Dificultad</th>
                            <th>Opciones</th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($workouts as $workout)
                            <tr>
                                <td>{{ $workout->name }}</td>
                                <td>{{ $workout->type }}</td>
                                <td>{{ $workout->duration }} minutos</td>
                                <td>{!! $workout->bombs !!}</td>
                                <td>
                                    <a href="{{ route('workouts.show', ['workout' => $workout->id]) }}"
                                        title="VER DETALLES">
                                        <i class="fa fa-eye"></i>
                                    </a> &nbsp;
                                    <a href="{{ route('workouts.edit', ['workout' => $workout->id]) }}"
                                        title="EDITAR">
                                        <i class="fa fa-pencil"></i>
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

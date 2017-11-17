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
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($workouts as $workout)
                            <tr>
                                <td>{{ $workout->name }}</td>
                                <td>{{ $workout->type }}</td>
                                <td>{{ $workout->duration }} minutos</td>
                                <td>{!! $workout->bombs !!}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>

@endsection

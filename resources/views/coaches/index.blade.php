@extends('root')

@section('htmlheader_title')
    - Entrenadores
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6">
            <solid-box color="danger" title="Entrenadores">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Cumpleaños</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($coaches as $coach)
                            <tr>
                                <td>{{ $coach->id }}</td>
                                <td>{{ $coach->name }}</td>
                                <td>{{ $coach->birthday }}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

@extends('root')

@section('htmlheader_title')
    - Clases
@endsection

@section('content-header')
    Clases
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6">
            <solid-box color="danger" title="Lista">
                <data-table example="S">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Entrenador</th>
                            <th>WOD</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($trainings as $training)
                            <tr>
                                <td>{{ $training->id }}</td>
                                <td>{{ $training->coach->name }}</td>
                                <td>{{ $training->workout->name }}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>

        <div class="col-md-6">
            <div class="col-md-6">
                <a href="{{ route('trainings.create')}}" class="btn btn-app">
                    <span class="badge bg-red">{{ count($trainings) }}</span>
                    <i class="fa fa-graduation-cap"></i> Crear clase
                </a>
            </div>
        </div>
    </div>
@endsection

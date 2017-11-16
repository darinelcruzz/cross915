@extends('root')

@section('htmlheader_title')
    - Horarios
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <solid-box color="danger" title="HORARIOS">
                <data-table example="S">
                    <template slot="header">
                        <tr>
                            <th>Horario</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->hour }}</td>
                                <td>{{ $schedule->monday }}</td>
                                <td>{{ $schedule->tuesday }}</td>
                                <td>{{ $schedule->wednesday }}</td>
                                <td>{{ $schedule->thursday }}</td>
                                <td>{{ $schedule->friday }}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

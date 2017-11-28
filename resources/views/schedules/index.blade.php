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
                            <th align="center">Horario</th>
                            <th align="center">Lunes</th>
                            <th align="center">Martes</th>
                            <th align="center">Miércoles</th>
                            <th align="center">Jueves</th>
                            <th align="center">Viernes</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $schedule->hour }}</td>
                                <td align="center">
                                    @include('schedules/classcell', ['weekday' => 'monday'])
                                </td>
                                <td align="center">
                                    @include('schedules/classcell', ['weekday' => 'tuesday'])
                                </td>
                                <td align="center">
                                    @include('schedules/classcell', ['weekday' => 'wednesday'])
                                </td>
                                <td align="center">
                                    @include('schedules/classcell', ['weekday' => 'thursday'])
                                </td>
                                <td align="center">
                                    @include('schedules/classcell', ['weekday' => 'friday'])
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

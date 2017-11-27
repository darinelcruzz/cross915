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
                                    @if ($schedule->monday)
                                        <small class="label label-{{ $schedule->mondayc->color }}">{{ $schedule->mondayc->coach->name }}</small><br>
                                        <small class="label label-{{ $schedule->mondayc->color }}">{{ $schedule->mondayc->workout->name }}</small>
                                    @else
                                        @include('schedules/assign', ['name' => 'monday'])
                                    @endif
                                </td>
                                <td align="center">
                                    @if ($schedule->tuesday)
                                        <small class="label label-{{ $schedule->tuesdayc->color }}">{{ $schedule->tuesdayc->coach->name }}</small><br>
                                        <small class="label label-{{ $schedule->tuesdayc->color }}">{{ $schedule->tuesdayc->workout->name }}</small>
                                    @else
                                        @include('schedules/assign', ['name' => 'tuesday'])
                                    @endif
                                </td>
                                <td align="center">
                                    @if ($schedule->wednesday)
                                        <small class="label label-{{ $schedule->wednesdayc->color }}">{{ $schedule->wednesdayc->coach->name }}</small><br>
                                        <small class="label label-{{ $schedule->wednesdayc->color }}">{{ $schedule->wednesdayc->workout->name }}</small>
                                    @else
                                        @include('schedules/assign', ['name' => 'wednesday'])
                                    @endif
                                </td>
                                <td align="center">
                                    @if ($schedule->thursday)
                                        <small class="label label-{{ $schedule->thursdayc->color }}">{{ $schedule->thursdayc->coach->name }}</small><br>
                                        <small class="label label-{{ $schedule->thursdayc->color }}">{{ $schedule->thursdayc->workout->name }}</small>
                                    @else
                                        @include('schedules/assign', ['name' => 'thursday'])
                                    @endif
                                </td>
                                <td align="center">
                                    @if ($schedule->friday)
                                        <small class="label label-{{ $schedule->fridayc->color }}">{{ $schedule->fridayc->coach->name }}</small><br>
                                        <small class="label label-{{ $schedule->fridayc->color }}">{{ $schedule->fridayc->workout->name }}</small>
                                    @else
                                        @include('schedules/assign', ['name' => 'friday'])
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

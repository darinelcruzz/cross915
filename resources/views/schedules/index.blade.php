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
                                <td>
                                    @if ($schedule->monday)
                                        {{ $schedule->monday }}
                                    @else
                                        <a href="{{ route('schedules.edit', ['schedule' => $schedule->id, 'weekday' => 1]) }}"
                                            class="btn btn-xs btn-danger" title="AGREGAR CLASE">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($schedule->tuesday)
                                        {{ $schedule->tuesday }}
                                    @else
                                        <a href="{{ route('schedules.edit', ['schedule' => $schedule->id, 'weekday' => 2]) }}"
                                            class="btn btn-xs btn-danger" title="AGREGAR CLASE">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($schedule->wednesday)
                                        {{ $schedule->wednesday }}
                                    @else
                                        <a href="{{ route('schedules.edit', ['schedule' => $schedule->id, 'weekday' => 3]) }}"
                                            class="btn btn-xs btn-danger" title="AGREGAR CLASE">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($schedule->thursday)
                                        {{ $schedule->thursday }}
                                    @else
                                        <a href="{{ route('schedules.edit', ['schedule' => $schedule->id, 'weekday' => 4]) }}"
                                            class="btn btn-xs btn-danger" title="AGREGAR CLASE">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($schedule->friday)
                                        {{ $schedule->friday }}
                                    @else
                                        <a href="{{ route('schedules.edit', ['schedule' => $schedule->id, 'weekday' => 5]) }}"
                                            class="btn btn-xs btn-danger" title="AGREGAR CLASE">
                                            <i class="fa fa-plus"></i>
                                        </a>
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

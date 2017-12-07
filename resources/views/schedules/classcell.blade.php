@if ($schedule->$weekday)
    @if ($schedule->{$weekday.'c'}->coach_id != 0)
        <small class="label label-{{ $schedule->{$weekday.'c'}->color }}">{{ $schedule->{$weekday.'c'}->workout->name or 'nada' }}</small>
        <br>
        <small class="label label-{{ $schedule->{$weekday.'c'}->color }}">{{ $schedule->{$weekday.'c'}->coach->name }}</small>
        &nbsp;
    @endif
    <modal-button target="{{ $weekday }}{{ $loop->iteration}}">
        <i class="fa fa-pencil"></i>
    </modal-button>

    <modal id="{{ $weekday }}{{ $loop->iteration }}" title="Asignar entrenador/color">
        @include('schedules/assign', ['name' => $weekday])
    </modal>
@else
    @include('schedules/assign', ['name' => $weekday])
@endif

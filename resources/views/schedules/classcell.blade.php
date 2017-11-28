@if ($schedule->$weekday)
    <small class="label label-{{ $schedule->{$weekday.'c'}->color }}">{{ $schedule->{$weekday.'c'}->coach->name }}</small><br>
    <small class="label label-{{ $schedule->{$weekday.'c'}->color }}">{{ $schedule->{$weekday.'c'}->workout->name }}</small>
    &nbsp;
    <modal-button target="{{ $weekday }}{{ $loop->iteration}}">
        <i class="fa fa-pencil"></i>
    </modal-button>

    <modal id="{{ $weekday }}{{ $loop->iteration}}" title="Cambiar la clase">
        @include('schedules/assign', ['name' => $weekday])
    </modal>
@else
    @include('schedules/assign', ['name' => $weekday])
@endif

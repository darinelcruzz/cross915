{!! Form::open(['method' => 'POST', 'route' => 'schedules.assign'])!!}
    <input type="hidden" name="id" value="{{ $schedule->id }}">
    <div class="input-group input-group-sm">
        <select name="{{ $name }}" class="form-control select2" style="width: 100%;">
          <option selected disabled>Elegir clase</option>
          @foreach ($trainings as $training)
              <option value="{{ $training->id }}">{{ $training->coach->name }} - {{ $training->workout->name }}</option>
          @endforeach
        </select>
        <span class="input-group-btn">
          <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-plus"></i></button>
        </span>
    </div>
{!! Form::close() !!}

{!! Form::open(['method' => 'POST', 'route' => $route])!!}
    <input type="hidden" name="id" value="{{ $schedule->id }}">
    <div class="input-group input-group-sm">
        <select name="{{ $name }}" class="form-control select2" style="width: 100%;">
          <option selected="selected">Elegir clase</option>
          @foreach ($iterable as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
          @endforeach
        </select>
        <span class="input-group-btn">
          <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-plus"></i></button>
        </span>
    </div>
{!! Form::close() !!}

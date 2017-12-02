{!! Form::open(['method' => 'POST', 'route' => 'trainings.update'])!!}
    <input type="hidden" name="id" value="{{ $loop->iteration + $fase }}">
    <div class="input-group input-group-sm">
        <select name="coach_id" class="form-control select2" style="width: 100%;">
          <option selected disabled>Elegir entrenador</option>
          @foreach ($coaches as $coach)
              <option value="{{ $coach->id }}">{{ $coach->name }}</option>
          @endforeach
        </select>
        <select name="color" class="form-control select2" style="width: 100%;">
          <option selected disabled>Elegir color</option>
          <option value="default">Gris</option>
          <option value="primary">Azul</option>
          <option value="info">Celeste</option>
          <option value="success">Verde</option>
          <option value="warning">Amarillo</option>
          <option value="danger">Rojo</option>
        </select>
        <span class="input-group-btn">
          <button type="submit" class="btn btn-danger btn-flat"><i class="fa fa-plus"></i></button>
        </span>
    </div>
{!! Form::close() !!}

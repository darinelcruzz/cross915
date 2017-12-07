{!! Form::open(['method' => 'POST', 'route' => 'trainings.update'])!!}
    <input type="hidden" name="id" value="{{ $loop->iteration + $fase }}">

    {!! Field::select('coach_id', $coaches->pluck('name', 'id')->toArray(), null,
        ['label' => 'Entrenador', 'tpl' => 'templates/withicon', 'empty' => 'Elije entrenador'],
        ['icon' => 'male'])
    !!}

    <hr>

    {!! Field::select('color',
        [
            "default" => 'Gris',
            "primary" => 'Azul',
            "info" => 'Celeste',
            "success" => 'Verde',
            "warning" => 'Amarillo',
            "danger" => 'Rojo'
        ],
        null, ['tpl' => 'templates/withicon', 'empty' => 'Elije un color'],
        ['icon' => 'paint-brush'])
    !!}

    <button slot="footer" type="submit" class="btn btn-danger pull-right">OK</button>

{!! Form::close() !!}

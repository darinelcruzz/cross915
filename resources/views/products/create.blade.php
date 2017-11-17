@extends('root')

@section('htmlheader_title')
    - Crear producto
@endsection

@section('content-header')
    Crear producto
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'products.store', 'enctype' => 'multipart/form-data']) !!}
                    {!! Field::text('description', ['tpl' => 'templates/withicon'], ['icon' => 'tag']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::text('code', ['tpl' => 'templates/withicon'], ['icon' => 'barcode']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('family',
                                ['blusa' => 'Blusa', 'legging' => 'Legging', 'playera' => 'Playera', 'pants' => 'Pants',
                                'short' => 'Short', 'top' => 'Top', 'accesorio' => 'Accesorio', 'otros' => 'Otros'], null,
                                ['tpl' => 'templates/withicon', 'empty' => 'Seleccione la familia'], ['icon' => 'tags']) !!}
                        </div>
                    </div>
                    {!! Field::text('provider', ['tpl' => 'templates/withicon'], ['icon' => 'barcode']) !!}
                    <br>
                    <div class="form-group">
                        <label for="img">Imegen del producto</label>
                        <input type="file" id="img" name="img">
                    </div>


                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

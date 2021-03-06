@extends('root')

@section('htmlheader_title')
    - Crear venta
@endsection

@section('content-header')
    Crear venta
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'sales.store', 'enctype' => 'multipart/form-data']) !!}
                    <select name="client" class="form-control select2" style="width: 100%;">
                      <option selected="selected" disabled>Seleccione un cliente</option>
                      @foreach ($members as $key => $value)
                          <option value="{{ $key }}">{{ $value }}</option>
                      @endforeach
                    </select>

                    {!! Field::select('credit', ['1' => 'Sí', '0' => 'No'], null,
                        ['label' => '', 'tpl' => 'templates/withicon', 'empty' => '¿A crédito?'], ['icon' => 'credit-card'])
                    !!}

                    <ptable></ptable>

                    <hr>
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </solid-box>
        </div>
    </div>
@endsection

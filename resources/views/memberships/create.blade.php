@extends('root')

@section('htmlheader_title')
    - Crear membresía
@endsection

@section('content-header')
    Crear membresía
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Agregar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'memberships.store']) !!}

                    {!! Field::text('name', ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    {!! Field::text('description', ['tpl' => 'templates/withicon'], ['icon' => 'indent']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::number('visits', 0, ['tpl' => 'templates/withicon', 'min' => '0'], ['icon' => 'sign-in']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::number('months', 0, ['tpl' => 'templates/withicon', 'min' => '0'], ['icon' => 'calendar']) !!}
                        </div>
                    </div>
                    {!! Field::number('amount', 0, ['step' => '0.01', 'min' => '0', 'tpl' => 'templates/withicon'], ['icon' => 'dollar']) !!}
                    <hr>
                    <input type="hidden" name="status" value="1">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

@extends('root')

@section('htmlheader_title')
    - Crear usuario
@endsection

@section('content-header')
    Crear usuario
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <solid-box color="danger" title="Lista de miembros">
                {!! Form::open(['method' => 'POST', 'route' => 'users.store', 'class' => 'form-horizontal']) !!}
                    <div class="box-body">
                        <div class="col-md-12">
                            {!! Field::text('name', ['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                            {!! Field::text('email', ['label' => 'Usuario', 'tpl' => 'templates/withicon'], ['icon' => 'user']) !!}
                            {!! Field::password('password', ['tpl' => 'templates/withicon'], ['icon' => 'key']) !!}
                            {!! Field::password('password2', ['tpl' => 'templates/withicon'], ['icon' => 'key']) !!}
                            {!! Field::select('level', ['1' => 'Administración'], null,
                                ['tpl' => 'templates/withicon', 'empty' => 'Elija la jerarquía'], ['icon' => 'sitemap']) !!}
                        </div>
                    </div>
                    <div class="box-footer">
                        {!! Form::submit('Agregar', ['class' => 'btn btn-black btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            </solid-box>
        </div>
    </div>
@endsection

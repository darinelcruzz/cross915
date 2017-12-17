@extends('root')

@section('htmlheader_title')
    - Editar membresía
@endsection

@section('content-header')
    Editar membresía
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Modificar datos" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'memberships.update']) !!}

                    {!! Field::text('name', $membership->name,['tpl' => 'templates/withicon'], ['icon' => 'id-card-o']) !!}
                    {!! Field::text('description', $membership->description, ['tpl' => 'templates/withicon'], ['icon' => 'indent']) !!}
                    {!! Field::select('type', ['año' => 'Anual', 'meses' => 'Mesual', 'dias' => 'Días'], $membership->type,
                        ['empty' => 'Seleccione el tipo', 'tpl' => 'templates/withicon'], ['icon' => 'calendar'])!!}
                    {!! Field::number('amount', $membership->amount, ['step' => '0.01', 'min' => '0', 'tpl' => 'templates/withicon'], ['icon' => 'dollar']) !!}
                    <hr>
                    <input type="hidden" name="id" value={{ $membership->id }}>
                    <input type="hidden" name="status" value="1">
                    {!! Form::submit('Editar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

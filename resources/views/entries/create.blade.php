@extends('root')

@section('htmlheader_title')
    - Crear entrada
@endsection

@section('content-header')
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6">
            <solid-box color="danger" title="Crear entrada">
                {!! Form::open(['method' => 'POST', 'route' => 'entries.store'])!!}

                <h3 align="center">
                    <code>{{ $product->description }}</code>
                </h3>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        {!! Field::date('date', Date::now(), ['tpl' => 'templates/withicon'], ['icon' => 'calendar'])!!}
                    </div>
                    <div class="col-md-6">
                        {!! Field::text('ticket', ['tpl' => 'templates/withicon'], ['icon' => 'barcode'])!!}
                    </div>
                </div>

                    @if ($product->type == 'unisize')
                        {!! Field::number('unisize', $product->unisize, ['tpl' => 'templates/withicon', 'label' => 'Cantidad'], ['icon' => 'plus'])!!}
                    @else
                        <h4 align="center">Tallas</h4>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::number('small', $product->small, ['tpl' => 'templates/withtext'], ['text' => 'S']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::number('xsmall', $product->xsmall, ['tpl' => 'templates/withtext'], ['text' => 'XS']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::number('medium', $product->medium, ['tpl' => 'templates/withtext'], ['text' => 'M ']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::number('large', $product->large, ['tpl' => 'templates/withtext'], ['text' => 'L']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::number('xlarge', $product->xlarge, ['tpl' => 'templates/withtext'], ['text' => 'XL']) !!}
                            </div>
                        </div>
                    @endif

                    <hr>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger pull-right'])!!}

                {!! Form::close()!!}
            </solid-box>
        </div>
    </div>
@endsection

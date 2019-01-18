@extends('root')

@section('htmlheader_title')
    - Editar producto
@endsection

@section('content-header')
    Editar producto
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <simple-box title="Editar {{ $product->description }}" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'products.update', 'enctype' => 'multipart/form-data']) !!}

                    {!! Field::text('description', $product->description,['tpl' => 'templates/withicon'], ['icon' => 'tag']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::text('code', $product->code,['tpl' => 'templates/withicon'], ['icon' => 'barcode']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Field::select('family',
                                ['blusa' => 'Blusa', 'legging' => 'Legging', 'playera' => 'Playera', 'pants' => 'Pants',
                                'short' => 'Short', 'top' => 'Top', 'accesorio' => 'Accesorio', 'otros' => 'Otros'], $product->family,
                                ['tpl' => 'templates/withicon', 'empty' => 'Seleccione la familia'], ['icon' => 'tags']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::number('price', $product->price,['tpl' => 'templates/withicon'], ['icon' => 'money']) !!}
                        </div>

                        <div class="col-md-6">
                            {!! Field::number('public', $product->public,['tpl' => 'templates/withicon'], ['icon' => 'dollar']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::text('provider', $product->provider,['tpl' => 'templates/withicon'], ['icon' => 'truck']) !!}
                        </div>
                        <div class="col-md-6" align="center">
                            <br>
                            <div class="fileUpload btn btn-danger">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Actualizar imagen</span>
                                <input type="file" id="img" name="img" class="upload" @change="onFileChange" />
                            </div>
                            <div v-if="image" align="center">
                                <img :src="image" width="200px"/>
                            </div>
                            <div v-else align="center">
                                <img src="{{ $product->img_url }}" alt="{{ $product->description }}" height="200px">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="status" value="1">
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </solid-box>
        </div>
        <div class="col-md-2"  align="center">
            <a href="{{ route('products.disable', $product->id) }}" class="btn btn-app">
                <i class="fa fa-minus"></i> Desactivar producto
            </a>
        </div>
    </div>
@endsection

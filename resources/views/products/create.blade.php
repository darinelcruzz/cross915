@extends('root')

@section('htmlheader_title')
    - Crear producto
@endsection

@section('content-header')
    Crear producto
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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

                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::number('price', ['tpl' => 'templates/withicon'], ['icon' => 'money']) !!}
                        </div>

                        <div class="col-md-6">
                            {!! Field::number('public', ['tpl' => 'templates/withicon'], ['icon' => 'dollar']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            {!! Field::text('provider', ['tpl' => 'templates/withicon'], ['icon' => 'truck']) !!}
                        </div>

                        <div class="col-md-6">
                            {!! Field::select('sizes', ['0' => 'XS, S, M, L, XL', '1' => 'Único'], 1,
                                ['tpl' => 'templates/withicon', 'label' => 'Tamaños', 'empty' => 'Seleccione opción', 'v-model' => 'sizes'],
                                ['icon' => 'arrows'])
                            !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6" align="center">
                            <br>
                            <div class="fileUpload btn btn-danger">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Subir imagen</span>
                                <input type="file" id="img" name="img" class="upload" @change="onFileChange" />
                            </div>
                            <div v-if="image" align="center">
                                <img :src="image" width="200px"/>
                            </div>
                        </div>
                        <div v-if="sizes != 0" class="col-md-6">
                            {!! Field::number('unisize', ['label' => 'Cantidad', 'tpl' => 'templates/withicon'], ['icon' => 'slack']) !!}
                        </div>
                        <div v-else class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Field::number('xsmall', ['tpl' => 'templates/withtext'], ['text' => 'XS']) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Field::number('small', ['tpl' => 'templates/withtext'], ['text' => 'S']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Field::number('medium', ['tpl' => 'templates/withtext'], ['text' => 'M ']) !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Field::number('large', ['tpl' => 'templates/withtext'], ['text' => 'L']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Field::number('xlarge', ['tpl' => 'templates/withtext'], ['text' => 'XL']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    {!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </solid-box>
        </div>
    </div>
@endsection

@extends('root')

@section('htmlheader_title')
    - Fotos
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-4">
            <solid-box color="danger" title="Fotos en tablet">
                {!! Form::open(['method' => 'POST', 'route' => 'attendences.update', 'enctype' => 'multipart/form-data']) !!}
                    <div class="col-md-12">
                        {!! Field::select('photo',
                                ['1' => 'Foto 1', '2' => 'Foto 2', '3' => 'Foto 3', '4' => 'Foto 4'], null,
                                ['empty' => 'Seleccione la foto a cambiar', 'tpl' => 'templates/withicon'], ['icon' => 'picture-o'])!!}
                    </div>
                    <div class="col-md-12" align="center">
                        <br>
                        <div class="fileUpload btn btn-danger">
                            <span><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Actualizar imagen</span>
                            <input type="file" id="img" name="img" class="upload" @change="onFileChange" />
                        </div>
                        <div v-if="image" align="center">
                            <img :src="image" width="150px"/>
                            <br>
                        </div>
                    </div>
                    {!! Form::submit('Editar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </solid-box>
        </div>

        <div class="col-md-8">
            <solid-box color="danger" title="Fotos en tablet">
                <div class="row">
                    <div class="col-md-6">
                        <div align="center">
                            <h3><b>1</b></h3>
                            <img src="/storage/photos/1.jpeg" alt="Sin foto" height="150px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div align="center">
                            <h3><b>2</b></h3>
                            <img src="/storage/photos/2.jpeg" alt="Sin foto" height="150px">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div align="center">
                            <h3><b>3</b></h3>
                            <img src="/storage/photos/3.jpeg" alt="Sin foto" height="150px">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div align="center">
                            <h3><b>4</b></h3>
                            <img src="/storage/photos/4.jpeg" alt="Sin foto" height="150px">
                        </div>
                    </div>
                </div>
            </solid-box>
        </div>
    </div>
@endsection

@extends('root')

@section('htmlheader_title')
    - Gastos
@endsection

@section('content-header')
@endsection

@section('main-content')
    <body class="hold-transition register-page">
        <div class="row">
            <div class="col-md-5">
                <simple-box title="" color="danger">
                    <div align="center" valign="middle">
                    	<img width="120px" height="120px" src="{{ asset('/img/Cross915.png') }}">
                    </div>
                    {!! Form::open(['method' => 'POST', 'route' => 'attendences.store']) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Field::select('member_id',
                                    ['1' => 'David - 001', '2' => 'Juan - 002', '3' => 'Pedro - 003', '4' => 'Pablo - 004'], null,
                                    ['empty' => 'Nombre / # de miembro', 'tpl' => 'templates/withicon'], ['icon' => 'user'])
                                !!}
                            </div>
                        </div>
                        <br>
                        {!! Form::submit('Continuar', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </simple-box>
            </div>
            <div class="col-md-7">
                <simple-box title="" color="danger">
                    <carousel :items="5">
                        <carousel-item active
                              img="{{ asset('storage/products/Fama.jpeg') }}"
                              height="100%">
                        </carousel-item>
                        <carousel-item
                            img="{{ asset('img/photo2.png') }}"
                            height="100%">
                        </carousel-item>
                        <carousel-item
                            img="{{ asset('img/photo3.jpg') }}"
                            height="100%">
                        </carousel-item>
                        <carousel-item
                            img="{{ asset('img/photo4.jpg') }}"
                            height="100%">
                        </carousel-item>
                    </carousel>
                </simple-box>
            </div>
        </div>
    </body>
@endsection

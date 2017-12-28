@extends('simple')

@section('htmlheader_title')
    - Asistencia
@endsection

@section('content-header')
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-5">
            <simple-box title="" color="danger">
                <div align="center" valign="middle">
                	<img width="120px" height="120px" src="{{ asset('/img/Cross915.png') }}">
                </div>
                {!! Form::open(['method' => 'POST', 'route' => 'attendences.store']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <select name="member_id" class="form-control select2" style="width: 100%;">
                              <option selected="selected" disabled>Buscar por nombre o id</option>
                              @foreach ($members as $key => $value)
                                  <option value="{{ $key }}">{{ $value . ' - ' . $key }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    {!! Form::submit('Continuar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
        <div class="col-md-7">
            <simple-box title="" color="danger">
                <carousel :items="4">
                    <carousel-item active
                        img="{{ asset('storage/photos/1.jpeg') }}">
                    </carousel-item>
                    <carousel-item
                        img="{{ asset('storage/photos/2.jpeg') }}"
                        height="10px">
                    </carousel-item>
                    <carousel-item
                        img="{{ asset('storage/photos/3.jpeg') }}"
                        height="10%">
                    </carousel-item>
                    <carousel-item
                        img="{{ asset('storage/photos/4.jpeg') }}"
                        height="10%">
                    </carousel-item>
                </carousel>
            </simple-box>
        </div>
    </div>
@endsection

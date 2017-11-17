@extends('root')

@section('htmlheader_title')
    - WOD
@endsection

@section('content-header')

@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-6">
            <solid-box title={{ strtoupper($workout->name) }} color="danger">
                {!! toMD($workout->description) !!}
            </solid-box>
        </div>
    </div>

@endsection

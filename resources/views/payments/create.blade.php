@extends('root')

@section('htmlheader_title')
    - Pago
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <simple-box title="Crear pago" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'payments.store']) !!}
                    <div class="col-md-12">
                        <div class="row">
                            {!! Field::select('member_id', $members, null,
                                ['tpl' => 'templates/withicon', 'empty' => 'Seleccione un miembro'], ['icon' => 'user-o']) !!}
                        </div>
                        <hr>
                            <h4>Pago anterior:</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::select('membership_id', $memberships, null,
                                    ['tpl' => 'templates/withicon', 'empty' => 'Seleccione una membresía', 'v-model' => 'mdescription'], ['icon' => 'percent']) !!}
                            </div>
                            <div class="col-md-6">
                                <membership-details :mid="mdescription"></membership-details>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::select('discount_id', $discounts, null,
                                    ['tpl' => 'templates/withicon', 'empty' => 'Seleccione un descuento', 'v-model' => 'discount'], ['icon' => 'percent']) !!}
                            </div>
                            <div class="col-md-6">
                                <discount-details :mid="discount"></discount-details>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::date('date_start', $date,['tpl' => 'templates/withicon'], ['icon' => 'calendar']) !!}
                            </div>
                        </div>
                        <hr>
                    </div>
                    <hr>
                    {!! Form::submit('Pagar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
            </simple-box>
        </div>
    </div>
@endsection

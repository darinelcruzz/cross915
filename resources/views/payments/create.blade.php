@extends('root')

@section('htmlheader_title')
    - Pago
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-7">
            <solid-box title="Crear pago" color="danger">
                {!! Form::open(['method' => 'POST', 'route' => 'payments.store']) !!}
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
                        <div class="col-md-6"><br>
                            <b class="pull-left">TOTAL:</b>
                            <total-to-pay :membership="mdescription" :discount="discount"></total-to-pay>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="hidden" name="member_id" value="{{ $member->id }}">
                            <button type="sumbit" class="btn btn-danger btn-block">
                                <strong>P A G A R</strong>
                            </button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </solid-box>
        </div>

        <div class="col-md-5">
            <div class="info-box bg-{{ fdate($member->ingress, 'd', 'Y-m-d') > date('d') ? 'green': 'red'}}">
                <span class="info-box-icon"><i class="fa fa-credit-card"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Corte</span>
                    <span class="info-box-number">
                        {{ fdate($member->ingress, 'd', 'Y-m-d') }}
                        {{ fdate(date('Y-m-d'), '\d\e F', 'Y-m-d') }}
                    </span>
                    <span class="progress-description">
                        {{ fdate($member->ingress, 'd', 'Y-m-d') > date('d') ? 'A TIEMPO': 'ATRASADO'}}
                    </span>
                </div>
            </div>

            <last-payment :member="{{ $member->id }}"></last-payment>
        </div>
    </div>
@endsection

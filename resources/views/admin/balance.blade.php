@extends('root')

@section('htmlheader_title')
    - Caja
@endsection

@section('content-header')
@endsection

@section('main-content')
    <div class="row">
		<div class="col-md-5">
			<solid-box title="Buscar" color="danger"  collapsed button>
				{!! Form::open(['method' => 'POST', 'route' => 'admin.cash']) !!}
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							{!! Field::date('date', $date, ['tpl' => 'templates/withicon'],
							['icon' => 'calendar-check-o']) !!}
							{!! Form::submit('Buscar', ['class' => 'btn btn-danger pull-right']) !!}
						</div>
					</div>
				{!! Form::close() !!}
			</solid-box>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-9 col-md-12">
			<simple-box title="Ingresos de {{ $fdate }}" example="example1" color="danger">
		        <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>Tipo</th>
                            <th>Miembro</th>
                            <th>Monto</th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($payments as $payment)
                            <tr>
                                <td>Membrecia</td>
                                <td><a href="{{ route('members.show', ['id' => $payment->member->id])}}">{{ $payment->member->name }}</a></td>
                                <td>${{ number_format($payment->amount,2) }}</td>
                            </tr>
                        @endforeach
                        @foreach ($sales as $sale)
                            <tr>
                                <td>Productos</td>
                                <td><a href="{{ route('members.show', ['id' => $sale->clientr->id])}}">{{ $sale->clientr->name }}</a></td>
                                <td>${{ number_format($sale->total,2) }}</td>
                            </tr>
                        @endforeach
                        @foreach ($salesC as $sale)
                            <tr>
                                <td>Productos a Crédito</td>
                                <td><a href="{{ route('members.show', ['id' => $sale->clientr->id])}}">{{ $sale->clientr->name }}</a></td>
                                <td>${{ number_format($sale->total,2) }}</td>
                            </tr>
                        @endforeach
                        @foreach ($deposits as $deposit)
                            <tr>
                                <td>Abonos</td>
                                <td><a href="{{ route('members.show', ['id' => $deposit->saler->clientr->id])}}">{{ $deposit->saler->clientr->name }}</a></td>
                                <td>${{ number_format($deposit->amount,2) }}</td>
                            </tr>
                        @endforeach
    				</template>
                    <template slot="footer">
                        <tr>
                            <td></td>
                            <td><b>Total</b></td>
                            <td><b>${{ number_format($sumA,2) }}</b></td>
                        </tr>
    				</template>
                </data-table>
		    </simple-box>
		</div>
        <div class="col-lg-3 col-sm-12">
            <div class="col-lg-12 col-sm-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Membresias</p>
                        <h3>${{ number_format($sumP,2) }}</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Productos</p>
                        <h3>${{ number_format($sumS,2) }}</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <p>Productos a Crédito</p>
                        <h3>${{ number_format($sumSC,2) }}</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-sm-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Abonos</p>
                        <h3>${{ number_format($sumD,2) }}</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="small-box bg-success">
                    <div class="inner">
                        <p>Total</p>
                        <h3>${{ number_format($sum,2) }}</h3>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                </div>
            </div>
		</div>
    </div>
@endsection

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
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <p>Productos</p>
                    <h3>${{ number_format($sum,2) }}</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <p>Membresias</p>
                    <h3>${{ number_format($sum,2) }}</h3>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
            </div>
        </div>
	</div>

	<div class="row">
		<div class="col-lg-10 col-md-12">
			<simple-box title="Ingresos de {{ $fdate }}" example="example1" color="danger">
		        <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Miembro</th>
                            <th>Monto</th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->member->name }}</td>
                                <td>${{ number_format($payment->amount,2) }}</td>
                            </tr>
                        @endforeach
    				</template>
                    <template slot="footer">
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>${{ number_format($sum,2) }}</td>
                        </tr>
    				</template>
                </data-table>
		    </simple-box>
		</div>
    </div>
@endsection

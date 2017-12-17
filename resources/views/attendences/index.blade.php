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
				{!! Form::open(['method' => 'POST', 'route' => 'attendences.index']) !!}
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
		<div class="col-lg-8 col-md-12">
			<simple-box title="Asistencia de {{ $fdate }}" example="example1" color="danger">
		        <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Miembro</th>
                            <th>Monto</th>
                            <th></th>
                        </tr>
                    </template>
                    <template slot="body">
    				</template>
                </data-table>
		    </simple-box>
		</div>
    </div>
@endsection

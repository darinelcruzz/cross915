@extends('root')

@section('htmlheader_title')
    - Asistencia
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
			<simple-box title="Asistencia de {{ $fdate }}" color="danger">
		        <data-table example="Search">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Miembro - Horario</th>
                            <th>Hora</th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach ($attendences as $attendence)
                            <tr>
                                <td>{{ $attendence->id }}</td>
                                <td>
                                    <a href="{{ route('members.show', ['id' => $attendence->member_id])}}">{{ $attendence->member->name .' - ' . $attendence->member->schedule_id }}</a>
                                </td>
                                <td>{{ $attendence->hour }}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
		    </simple-box>
		</div>
    </div>
@endsection

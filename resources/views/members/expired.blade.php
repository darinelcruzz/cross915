@extends('root')

@section('htmlheader_title')
    - Membresías vencidas
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <solid-box color="danger" title="Membrecías vencidas">
                <data-table example="Desc">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Membrecía</th>
                            <th>Vencimiento</th>
                            <th>Extras</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td><a href="{{ route('members.show', ['id' => $member->id])}}">{{ $member->name }}</a></td>
                                <td>{{ $member->membership->name }}</td>
                                <td>{{ $member->getShortWeekDate('validity') }}</td>
                                <td>{{ $member->pendigDays }} días</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

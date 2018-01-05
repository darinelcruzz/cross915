@extends('root')

@section('htmlheader_title')
    - Usuarios
@endsection

@section('content-header')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <solid-box color="danger" title="Lista de usuarios">
                <data-table example="Desc">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Nivel</th>
                            <th></th>
                        </tr>
                    </template>
                    <template slot="body">
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->level }}</td>
                                <td>
                                    <a href="{{ route('users.edit', ['user' => $user->id])}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

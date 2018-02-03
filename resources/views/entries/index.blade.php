@extends('root')

@section('htmlheader_title')
    - Entradas
@endsection

@section('content-header')
    Entradas
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-12">
            <solid-box color="danger" title="Entradas de productos">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Producto</th>
                            <th>Anterior</th>
                            <th>Posterior</th>
                            <th>Comprobante</th>
                            <th>Usuario</th>
                        </tr>
                    </template>

                    <template slot="body">
                        @foreach ($entries as $entry)
                            <tr>
                                <td>{{ $entry->id }}</td>
                                <td>{{ $entry->date }}</td>
                                <td>{{ $entry->product->description }}</td>
                                @if ($entry->product->type == 'unisize')
                                    <td>
                                        <span class="label label-default">{{ $entry->old }}</span>
                                    </td>
                                    <td>
                                        <span class="label label-default">{{ $entry->new }}</span>
                                    </td>
                                @else
                                    @php
                                        $sizesOld = unserialize($entry->old);
                                        $sizesNew = unserialize($entry->new);
                                    @endphp
                                    <td>
                                        <span class="label label-info">{{ $sizesOld['xs'] }}</span>
                                        <span class="label label-primary">{{ $sizesOld['s'] }}</span>
                                        <span class="label label-success">{{ $sizesOld['m'] }}</span>
                                        <span class="label label-warning">{{ $sizesOld['l'] }}</span>
                                        <span class="label label-danger">{{ $sizesOld['xl'] }}</span>
                                    </td>
                                    <td>
                                        <span class="label label-info">{{ $sizesNew['xs'] }}</span>
                                        <span class="label label-primary">{{ $sizesNew['s'] }}</span>
                                        <span class="label label-success">{{ $sizesNew['m'] }}</span>
                                        <span class="label label-warning">{{ $sizesNew['l'] }}</span>
                                        <span class="label label-danger">{{ $sizesNew['xl'] }}</span>
                                    </td>
                                @endif
                                <td>{{ $entry->ticket }}</td>
                                <td>{{ $entry->user->name }}</td>
                            </tr>
                        @endforeach
                    </template>
                </data-table>
            </solid-box>
        </div>
    </div>
@endsection

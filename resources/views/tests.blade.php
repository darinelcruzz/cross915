@extends('root')

@section('content-header')
    <h1>Caja de arena    <small>PARA JUGAR Y PROBRAR COSAS</small></h1>
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-6">
            <solid-box title="Acordeon" color="default">
                <accordion>
                    <accordion-item title="Uno" color="success" open>
                        <a href="{{ route('send')}}">Enviar correo</a>
                    </accordion-item>
                    <accordion-item title="Dos" color="danger">
                        Acordeon número dos
                    </accordion-item>
                    <accordion-item title="Tres" color="warning">
                        Acordeon número tres
                    </accordion-item>
                </accordion>
            </solid-box>

            <solid-box title="Tabla con datos" color="info">
                <data-table example="1">
                    <template slot="header">
                        <tr>
                            <th>Número</th>
                            <th>Ordinal</th>
                            <th>Romano</th>
                            <th>Nombre</th>
                            <th>Inglés</th>
                        </tr>
                    </template>
                    <template slot="body">
                        <tr>
                            <td>1</td>
                            <td>1ro</td>
                            <td>I</td>
                            <td>Uno</td>
                            <td>One</td>
                        </tr>
                    </template>
                </data-table>
            </solid-box>
        </div>

        <div class="col-md-6">
            <tabs :tabs="['Víctor', 'Gauss', 'Enrique', 'Dari']">
                <tab i="1" active>
                    El cara
                </tab>
                <tab i="2">
                    El carismático
                </tab>
                <tab i="3">
                    El ausente
                </tab>
                <tab i="4">
                    El listo
                </tab>
            </tabs>

            <simple-box title="Carrusel">

                <carousel :items="5">
                    <carousel-item active
                          img="{{ asset('img/photo1.png') }}"
                          caption="Primera">
                    </carousel-item>
                    <carousel-item
                        img="{{ asset('img/photo2.png') }}"
                        caption="Segunda">
                    </carousel-item>
                    <carousel-item
                        img="{{ asset('img/photo3.jpg') }}"
                        caption="Tercera">
                    </carousel-item>
                    <carousel-item
                        img="{{ asset('img/photo4.jpg') }}"
                        caption="Cuarta">
                    </carousel-item>
                </carousel>
            </simple-box>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <thumbnail
                name="Camisa" price="$ 150.00"
                img="{{ asset('img/photo3.jpg') }}">
            </thumbnail>
        </div>
        <div class="col-md-3">
            <thumbnail
                name="Comedor" price="$ 3500.00"
                img="{{ asset('img/photo2.png') }}">
            </thumbnail>
        </div>

        <div class="col-md-6">
            <timeline>
                <tl-label>11 Nov. 2017</tl-label>

                <tl-item icon="bolt" color="yellow" hour="17:30">
                    <label slot="title"><b>Entrenamiento</b> terminado en tiempo record.</label>
                </tl-item>

                <tl-item icon="star" color="blue" hour="12:00">
                    <label slot="title"><a href="#">Nueva rutina</a> completada</label>
                </tl-item>

                <tl-item icon="heartbeat" color="red" hour="09:00">
                    <label slot="title"><a href="#">Entrenamiento sin completar</a></label>
                    No te preocupes a todos les pasa <i class="fa fa-smile-o"></i>
                </tl-item>
            </timeline>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <profile color="success" img="{{ asset('img/user3-128x128.jpg') }}" name="Naoko Tenshi" job="Escritora">
                <pitem label="Libros">11</pitem>
                <pitem label="Eventos">12</pitem>
                <pitem label="Premios">2</pitem>
            </profile>
        </div>
    </div>

@endsection
